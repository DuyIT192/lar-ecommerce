@extends('dashboards.home')
@section('main_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a> 
		<i class="icon-angle-right"></i>
	</li>
	<li><a href="#">Dashboard</a></li>
</ul>
<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm mới Danh mục sản phẩm</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal">
				<fieldset>
				<legend class="lgd">Thông tin tài khoản</legend>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Tên đăng nhập <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="name" required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Email <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="email" name="email" required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Mật khẩu <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="password" name="password" required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Xác nhận mật khẩu <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="password" name="repassword" required="">
					</div>
				  </div>
				  <legend class="lgd">Thông tin chi tiết tài khoản</legend>
				  <div class="form-actions">
					<button type="submit" class="btn btn-primary">Lưu</button>
					<button class="btn" type="reset">Clear</button>
				  </div>
				</fieldset>
			  </form>
		
		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection