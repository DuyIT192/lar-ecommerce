@extends('dashboards.home')
@section('title','Phân quyền')
@section('description','hiển thị phân quyền người dùng ')
@section('keyword','phân quyền người dùng  tạo mới phân quyền ')
@section('main_content')
<ul class="breadcrumb">
  <li>
      <i class="icon-home"></i>
      <a href="{{ url ('/')}}">Trang chủ</a>
      <i class="icon-angle-right"></i> 
  </li>
  <li>
	 <i class="icon-plus-sign"></i>
	 <a href="{{route('roles.create')}}">Thêm mới role </a>
  </li>
</ul>
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Role information</h2>
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
	              <th>Tên</th>
	              <th>Quyền</th>
	            </tr>                                  
	          </thead>   
	          <tbody>
	          <tr>
	            <td>{{$role->name}}</td>
	            <td>
	            	 @if(!empty($rolePermissions))
	                    @foreach($rolePermissions as $pemission)
	                    	<span class="label label-success">{{$pemission->name}}</span>
	                    @endforeach
	                @endif
	            </td>
	          </tr>       
	          </tbody>
	       </table>  
	    </fieldset>      
		</div>
	</div><!--/span-->
</div><!--/row-->
@endsection