@extends('dashboards.home')
@section('title','Thông tin chi tiết  ')
@section('description','Thông tin chi tiết')
@section('keyword','Thông tin chi tiết ')
@section('main_content')
<ul class="breadcrumb">
  <li>
    <i class="icon-home"></i>
    <a href="{{ url ('/')}}">Trang chủ</a> 
    <i class="icon-angle-right"></i>
  </li>
  <li>
    <i class="fa fa-th" aria-hidden="true"></i>
    <a href="{{ route('users.index')}}">Danh sách tài khoản </a>
    <i class="icon-angle-right"></i>
  </li>
  <li>
    <i class="icon-plus-sign"></i>
    <a href="{{URL::route('users.create')}}">Thêm mới tài khoản </a>
  </li>
</ul>
<div class="row-fluid sortable">  
<div class="box span12">
  <div class="box-header">
    <h2 id="uname"><i class="fa fa-info-circle" aria-hidden="true"></i><span class="break"></span>Thông tin chi tài khoản : {{ old('uname',isset($data) ? $data['name'] : null)}}</h2>
    <div class="box-icon">
      <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
      <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
      <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
    </div>
  </div>
  <div class="box-content">
    <fieldset>
      <table class="table table-bordered table-striped table-condensed">
          <thead>
            <tr>
              <th>Tên tài khoản</th>
              <th>Email</th>
              <th style="text-align: center;">Level</th>
              <th style="text-align: center;">Trạng thái</th>
          	</tr>
          </thead>   
          <tbody>
          <tr>
          	<td>{{(isset($data) ? $data['name'] : null)}}</td>
          	<td>{{(isset($data) ? $data['email'] : null)}}</td>
          	<td style="text-align: center;">
          		<span class="label label-info">{{str_replace(['["','"]'],['',''],$user->getRoleNames())}}
				</span>
          	</td>
          	<td style="text-align: center;">
          		@if($data['status'] == 0)
          			<span  class="label label-danger" style="background: red;">Đã khóa</span>
          		@elseif($data['status'] == 1 && $data['email_verified_at'] == NULL )
          			<span class="label label-danger" style="background: red;">Chưa kích hoạt</span>
          			<span class="label label-success">Hoạt động</span>
          		@else 
                	<span class="label label-success">Hoạt động</span>
          		@endif
          	</td>
          </tr>        
          </tbody>
       </table>  
    </fieldset>
    <fieldset>
      <legend  style="width: 25%;font-size: 16px;text-align: center;">Thông tin chi tiết </legend>
      <div class="control-group" >
          <div class="controls"  >
           <table class="table table-bordered table-striped table-condensed">
    		<thead>
		        <th>Họ tên</th>
		        <th>Ngày sinh</th>
		        <th>Giới tính</th>
		        <th style="text-align: center;">Số điện thoại</th>
		        <th>Email</th>                                          
		    </thead>   
		    <tbody>
			    <tr>
			     <td>{{(isset($userDetail) ? $userDetail['name'] : null)}}</td>
			     <td>
	                @if($userDetail['birthday']==NULL)
	                  NULL
	                @else
	                  {{ (isset($userDetail) ? $user->userBirthday($userDetail,'birthday') : null)}}
	                @endif
			     </td>
			     <td>
			     	@if($userDetail['gender']==0)
	                  Nam
	                @else
	                  Nữ
	                @endif
			     </td>
			     <td style="text-align: center;">
			     	{{$user->phoneNumber->national_number}}
			     </td>
			     <td>{{(isset($userDetail) ? $userDetail['email'] : null)}}</td>
			    </tr>
		    </tbody>
 		</table>  
          </div>
      </div>
      <div class="control-group" >
          <div class="controls"  >
           <table class="table table-bordered table-striped table-condensed">
    		<thead>
		        <th>Số nhà / thôn</th>
		        <th>Xã - Phường</th>
		        <th>Quận - Huyện</th>
		        <th>Tỉnh - Thành</th>                                       
		    </thead>   
		    <tbody>
			    <tr>
			     <td>{{$user->addresses[0]->street}}</td>
			     <td>
	                {{$ward->name}}
			     </td>
			     <td>
	                {{(isset($district) ? $district->name : null)}}
			     </td>
			     <td>
			     	{{(isset($city) ? $city->name : null)}}
			     </td>
			    </tr>
		    </tbody>
 		</table>  
          </div>
      </div>
    </fieldset>
  </div>
</div><!--/span-->
</div><!--/row-->
@endsection