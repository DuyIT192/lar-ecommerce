<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\District;
use App\Ward;

class AjaxController extends Controller
{
    public function getCity($cityCode)
    {
        $district = District::where('matp',$cityCode)->get();
        foreach ($district as $value) 
        {
           echo  "<option  value='".$value->maqh."'>".$value->name."</option>"."\n";
        }
    }
    public function getDistrict($districtCode)
    {
        $ward = Ward::where('maqh',$districtCode)->get();
        foreach ($ward as $value) 
        {
           echo  "<option  value='".$value->xaid."'>".$value->name."</option>"."\n";
        }
    }
}
