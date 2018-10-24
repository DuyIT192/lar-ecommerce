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
		@include('dashboards.generals.alert')
		@include('dashboards.generals.error')
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white edit"></i><span class="break"></span>Permisson</h2>
			<div class="box-icon">
				<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
				<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
			</div>
		</div>
		<div class="box-content">
			{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
			<div class="row">
			    <div class="col-xs-12 col-sm-12 col-md-12">
			        <div class="form-group">
			            <strong>Name:</strong>
			            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
			        </div>
			    </div>
			    <div class="col-xs-12 col-sm-12 col-md-12">
			        <div class="form-group">
			            <strong>Permission:</strong>
			            <br/>
			            @foreach($permission as $value)
			                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
			                {{ $value->name }}</label>
			            <br/>
			            @endforeach
			        </div>
			    </div>
			    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
			        <button type="submit" class="btn btn-primary">Submit</button>
			    </div>
			</div>
			{!! Form::close() !!}
		</div>
	</div><!--/span-->

</div><!--/row-->
@endsection