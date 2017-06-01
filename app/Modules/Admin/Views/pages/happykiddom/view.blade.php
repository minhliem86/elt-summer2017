@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Activity</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($schedule,array('route'=>array('admin.happykiddom.update',$schedule->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal'))!!}
      <div class="form-group">
        <label for="">Center</label>
        {!!Form::select('center_id',$center,old('center_id'),array('class'=>'form-control'))!!}
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
