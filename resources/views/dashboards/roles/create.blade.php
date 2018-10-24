@extends('dashboards.home')
@section('title','Phân quyền')
@section('description','phân quyền người dùng ')
@section('keyword','phân quyền người dùng  tạo mới phân quyền ')
@section('main_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li>
		<a href="#">Dashboard</a>
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="{{route('users.index')}}">Danh sách thành viên</a></li>
</ul>
<div class="row-fluid sortable">
	<div class="box span12">
		@include('dashboards.generals.alert')
		@include('dashboards.generals.error')
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Role - Permission</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="POST"  action="{{route('roles.store')}}">
				<input type="hidden" name="_token" value="{!! csrf_token() !!}">
				<fieldset>
				<legend class="lgd">Thông tin quyền</legend>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Tên  <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="name"  required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label">Quyền</label>
					<div class="controls">
					@foreach($permission as $value)
						<label >
							<input type="checkbox" name="permission[]" value="{{$value->id}}"> {{$value->name}}
						</label>
					@endforeach
					</div>
				  </div>
				  <div class="form-actions">
					<button type="submit" id="smUser" class="btn btn-primary">Lưu</button>
					<button class="btn" type="reset">Clear</button>
				  </div>
				</fieldset>
			  </form>
		</div>
	</div><!--/span-->
</div><!--/row-->
@endsection