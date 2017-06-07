@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Schedule</h1>
</section>
<section class="content">

	<div class="box">
		<div class="container-fluid">
			{!!Form::open(array('route'=>array('admin.happykiddom.store'),'class'=>'formAdmin form-horizontal','files'=>true))!!}
				<div class="form-group">
					<label for="">Center</label>
					{!!Form::select('center_id',['' => 'Select Center']+$center,old('center_id'),array('class'=>'form-control'))!!}
				</div>
                <div class="form-group">
					<label for="">Programe</label>
					{!!Form::select('class_code',['' => 'Select Programe']+$capdo,old('class_code'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="">Schedule</label>
					{!!Form::textarea('schedule',old('schedule'),array('class'=>'form-control ckeditor', 'rows'=>'50'))!!}
				</div>

				<div class="form-group">
					{!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
					<a href="{!!URL::previous()!!}" class="btn btn-primary">Back</a>
				</div>
			{!!Form::close()!!}
		</div>
	</div>
</section>
@stop

@section('script')
<script>
	$(document).ready(function(){
		{!! Notification::showSuccess('alertify.success(":message");') !!}
		{!! Notification::showError('alertify.error(":message");') !!}
	})
</script>
@stop
