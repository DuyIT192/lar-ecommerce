@extends('dashboards.home')
@section('title','Phân quyền')
@section('description','phân quyền người dùng ')
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
		@include('dashboards.generals.alert')
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Role list</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">      
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
					  	  <th style="text-align: center;">STT</th>
						  <th>Tên quyền</th>
						  <th>Chi tiết / Sửa / Xóa</th>
					  </tr>
				  </thead>   
				  <tbody>
				  	@foreach($role as $key => $roleValue)
					<tr>
						<td style="text-align: center;">{{++$key}}</td>
						<td class="center">
							{{$roleValue['name']}}
						</td>
						<td class="center">
							@if($roleValue->name == 'super admin')
								<a class="btn btn-success" 
							href="{{route('roles.show',$roleValue['id'])}}">
								<i class="halflings-icon white zoom-in"></i>  
							</a>
							<a class="btn btn-info" href="javascript:void(0)">
								<i class="halflings-icon white edit"></i>  
							</a>
							<button type="submit" disabled="" class="btn btn-danger">
           						 	<i class="halflings-icon white trash"></i> 
           					</button>
							@else 
								<a class="btn btn-success" 
							href="{{route('roles.show',$roleValue['id'])}}">
								<i class="halflings-icon white zoom-in"></i>  
							</a>
							<a class="btn btn-info" 
							href="{{ route('roles.edit',$roleValue->id) }}">
								<i class="halflings-icon white edit"></i>  
							</a>
							{!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $roleValue->id],'style'=>'display:inline']) !!}
           						 <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn có muốn xóa {{$roleValue['name']}} không ?')" >
           						 	<i class="halflings-icon white trash"></i> 
           						 </button>
        					{!! Form::close() !!}
							@endif
						</td>
					</tr>
					@endforeach
				  </tbody>
			  </table>    
		</div>
	</div><!--/span-->
</div><!--/row-->
@endsection