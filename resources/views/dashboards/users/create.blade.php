@extends('dashboards.home')
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
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Thêm mới tài khoản</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
				{!! Form::open(array('route' => 'users.store','method'=>'POST','class'=>'form-horizontal','files' => true)) !!}
				<input type="hidden" name="status" value="1">
				<input type="hidden" name="accept_dashboard" value="1">
				<fieldset>
				<legend class="lgd">Thông tin tài khoản</legend>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Tên đăng nhập <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="text" name="name"  required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Email <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused"  id="focusedInput" type="email" name="email" required="">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Mật khẩu <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="password" name="password" required="" value="123456">
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label" for="focusedInput">Xác nhận mật khẩu <span class="reqd">*</span></label>
					<div class="controls">
					  <input class="input-xlarge focused" id="focusedInput" type="password" name="repassword" required="" value="123456">
					</div>
				  </div>
				  <div class="control-group">
	                <label class="control-label" for="selectError1">Phân quyền</label>
	                <div class="controls">
	                  <select name="roles[]" id="selectError1" multiple data-rel="chosen" required>
	                  @foreach($roles as $key => $value)
	                     <option value="{{$key}}">{{$value}}</option>
	                  @endforeach
	                  </select>
	                </div>
	                <div class="controls">
	                   <span><a style="color: red;font-style: italic;font-size: 14px;border: solid 1px;" href="{{route('roles.create')}}">Click Create New Role</a></span>
	                </div>
	              </div>
	              <div class="control-group">
		                <label class="control-label" for="focusedInput">Điện thoại <span class="reqd">*</span></label>
		                <div class="controls">
		                  <input class="input-xlarge focused " id="phone" name="phone" type="number"required="">
		                </div>
		                <input type="hidden" name="region_code">
		            </div>
				  <legend class="lgd">Thông tin chi tiết tài khoản</legend>
				  <div class="control-group">
		              <label class="control-label">Hình ảnh (Avatar) </label>
		              <div class="controls">
		                <!-- <input type="file" name="user_imager" value=""> -->
		                {{Form::file('user_imager', array('class' => 'name'))}}
		              </div>
		              <span class="fontItalia">( Hình ảnh sản phẩm tối đa 3MB )</span>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="focusedInput">Họ và tên</label>
		                <div class="controls">
		                  <input class="input-xlarge focused" id="focusedInput" type="text" name="txtName" value="">
		                </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label" for="date01">Ngày sinh</label>
		              <div class="controls">
		              <input type="text" class="input-xlarge datepicker" name="birthday" id="date01" value="" placeholder="dd-mm-yyyy"">
		              </div>
		            </div>
		            <div class="control-group">
		              <label class="control-label">Giới tính</label>
		              <div class="controls" >
		                <label class="radio" style="float: left;" >
		                <input type="radio" name="gender" id="optionsRadios1" value="0" checked=""> Nam
		                </label>
		              </div>
		              <div class="controls">
		                <label class="radio" style="float: left;">
		                  <input type="radio" name="gender" id="optionsRadios2" value="1">
		                  Nữ
		                </label>
		              </div>
		              <div class="controls" >
		                <label class="radio" style="float: left;" >
		                <input type="radio" name="gender" id="optionsRadios1" value="2" > Khác
		                </label>
		              </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="focusedInput">Email</label>
		                <div class="controls">
		                  <input class="input-xlarge focused" id="focusedInput" type="email" name="txtEmails" value="">
		                </div>
		            </div>
		            <div class="control-group">
		                <label class="control-label" for="focusedInput">Thành phố <span class="reqd">*</span></label>
		                <div class="controls">
		                 <select id="matp" data-rel="chosen" name="city" required="">
		                 	<option  value="0">--- Tỉnh / Thành ---</option>
		                 	@foreach($cities as $city)
	                    	<option  value="{{$city->matp}}">{{$city->name}}</option>
	                    	@endforeach
	                	</select>
		                </div>
		           </div>
		           <div class="control-group">
		                <label class="control-label" for="focusedInput">Quận - Huyện <span class="reqd">*</span></label>
		                <div class="controls">
		                 <select id="maqh" name="district" required="">
		                 	<option  value="0">--- Quận / Huyện ---</option>
	                	</select>
		                </div>
		           </div>
		           <div class="control-group">
		                <label class="control-label" for="focusedInput">Xã - Phường </label>
		                <div class="controls">
		                 <select id="xaid" name="ward" required="">
		                 	<option  value="0" id="ward">--- Xã / Phường ---</option>
	                	</select>
		                </div>
		           </div>
		            <div class="control-group">
		                <label class="control-label" for="focusedInput">Số nhà - Thôn <span class="reqd">*</span></label>
		                <div class="controls" >
		                  <input class="input-xlarge focused" id="focusedInput" type="text" name="street" required="">
		                </div>
		            </div>
				  <div class="form-actions">
					<button type="submit" id="smUser" class="btn btn-primary">Lưu</button>
					<button class="btn" type="reset">Clear</button>
				  </div>
				</fieldset>
				{!! Form::close() !!}
		</div>
	</div><!--/span-->
</div><!--/row-->
@section('script')	
@endsection
@endsection