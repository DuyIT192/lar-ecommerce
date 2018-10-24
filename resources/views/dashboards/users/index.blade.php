@extends('dashboards.home')
@section('title','Danh sách thành viên  ')
@section('description','Danh sách thành viên ')
@section('keyword','Danh sách thành viên ')
@section('main_content')
<ul class="breadcrumb">
  <li>
      <i class="icon-home"></i>
      <a href="{{ url ('/')}}">Trang chủ</a>
      <i class="icon-angle-right"></i> 
  </li>
  <li>
	 <i class="icon-plus-sign"></i>
	 <a href="{{route('users.create')}}">Thêm mới thành viên </a>
  </li>
</ul>
<div class="row-fluid sortable">		
	<div class="box span12">
		@include('dashboards.generals.alert')
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Danh sách tài khoản</h2>
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
					  <th>Tên tài khoản</th>
					  <th>Thời gian đăng ký</th>
					  <th>Level</th>
					  <th>Trạng thái</th>
					  <th>Chi tiết / Sửa / Xóa</th>
				  </tr>
			  </thead>   
			  <tbody>
			  	@foreach($user as $key => $userValue)
				<tr>
					<td style="text-align: center;">{{++$key}}</td>
					<td class="center">
						{{$userValue['name']}}
					</td>
					<td class="center">
						{{$userValue->coverDateTime($userValue,'created_at')}}
					</td>
					 <td>
					 	<span class="label label-info">{{str_replace(['["','"]'],['',''],$userValue->getRoleNames())}}
					 	</span>
					 </td>
					<td class="center">
						@if($userValue['status'] ==1)
							<span class="label label-success">Hoạt động</span>
						@elseif($userValue['status'] ==3)
							<span class="label label-danger" style="background: #CC9900;">Chưa kích hoạt</span>
						@else 
							<span class="label label-danger" style="background: red;">Đã khóa</span>
						@endif
					</td>
					<td class="center">
						@if($userValue->getRoleNames() == '["super admin"]')
						<a class="btn btn-success" 
						href="{{route('users.show',$userValue['id'])}}">
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
						href="{{route('users.show',$userValue['id'])}}">
							<i class="halflings-icon white zoom-in"></i>  
						</a>
						<a class="btn btn-info" 
						href="{{ route('users.edit',$userValue->id) }}">
							<i class="halflings-icon white edit"></i>  
						</a>
						{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $userValue->id],'style'=>'display:inline']) !!}
       						 <button type="submit" class="btn btn-danger" onclick="return xacnhanxoa('Bạn có muốn xóa {{$userValue['name']}} không ?')" >
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