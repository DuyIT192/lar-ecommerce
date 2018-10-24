<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Input;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
use App\UserDetail;
use App\City;
use App\District;
use App\Ward;
use File,Hash,Redirect,Carbon,Auth;
use Propaganistas\LaravelPhone\PhoneNumber;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->get();
        return view('dashboards.users.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $roles = Role::where('name','<>','super admin')->pluck('name','name');
        return view ('dashboards.users.create',compact('cities','roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        $data['remember_token'] = $data['_token'];
        $user = User::create($data);
        if (Input::hasFile('user_imager')) {
            $destinationPath = 'D:\wamp64\www\lar-ecommerce\resources\upload\users\avatar';
           /* $despart = public_path().'/resources/upload/users/avatar/';*/
            $fileName = $request->file('user_imager')->getClientOriginalName();
            $data['user_imager'] = $fileName;
            $request->file('user_imager')->move($destinationPath,$fileName);
        }
        $data['birthday'] = Carbon::parse($request->birthday)->format('Y/m/d');
        $user_detail = $user->userDetail()->create($data );
        $user->addresses()->create($data );
        $user->assignRole($request->input('roles'));
        $user->phoneNumber()->create([
        'country_code' => 84,
        'region_code' => 'VN',
        'national_number' => $data['phone'],
        'e164_format' => '+84'.$data['phone']
        ]);
        return redirect()->route('users.create')->with(['flash_message'=>'Thành viên được thêm mới thành công !']);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id)->toArray();
        $user = User::findOrFail($id);
        $userDetail = UserDetail::where('user_id',$id)->first();
        $ward = Ward::where('xaid',$user->addresses[0]->ward)->first();
        $district = District::where('maqh',$user->addresses[0]->district)->first();
        $city = City::where('matp',$user->addresses[0]->city)->first();
        return view ('dashboards.users.show',compact('data','user','userDetail','ward','district','city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->userDetail()->delete();
        $user->addresses()->delete();
        $user->phoneNumber()->delete();
        $user->delete();
        return redirect()->route('users.index')->with(['flash_message'=>'Thành viên được xoá thành công !']);
    }

    public function getLogin()
    {
        return view ('dashboards.users.login');
    }
    public function postLogin(Request $request)
    {
        $login = array(
            'name' => $request->name,
            'password' => $request->password,
            'accept_dashboard' => 1
        );
        $loginfails = array(
            'name' => $request->name,
            'password' => $request->password,
            'status' => 0
        );
        if (Auth::attempt($loginfails)) {
            Auth::logout();
            return Redirect::back()->withErrors(['Đăng nhập không thành công', 'Tài khoản của bạn đã bị khóa .']);
        }
        if (Auth::attempt($login)) {
            return redirect()->route('users.create');
        }
        else{
            return Redirect::back()->withErrors(['Đăng nhập không thành công', 'Kiểm tra lại username hoặc password .']);
        }
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('admin.users.getLogin');
    }
}
