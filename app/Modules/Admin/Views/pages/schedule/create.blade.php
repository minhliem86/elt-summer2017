@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Schedule</h1>
</section>
<section class="content">

	<div class="box">
		<div class="container-fluid">
			{!!Form::open(array('route'=>array('admin.schedule.store'),'class'=>'formAdmin form-horizontal','files'=>true))!!}
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="">Center</label>
              {!!Form::select('center_id',$list_center,'',['class'=>'form-control'])!!}
            </div>
            <div class="col-md-6">
              <label for="">Activity</label>
              {!!Form::select('activity_id',$list_activity,'',['class'=>'form-control'])!!}
            </div>
          </div>

        </div>
				<div class="form-group">
					<label for="">Date</label>
					{!!Form::text('date',old('date'),array('class'=>'form-control'))!!}
				</div>

        <div class="form-group">
					<label for="">Location</label>
					{!!Form::text('location',old('location'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-margin">
					<label for="">Status</label>
					<div>
						<span class="inline-radio"><input type="radio" name="status" value="1" checked=""> <b>Active</b> </span>
						<span class="inline-radio"><input type="radio" name="status" value="0" > <b>Deactive</b> </span>
					</div>
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
  {!!Html::style('public/assets/backend/js/datepicker/css/jquery.datepick.css')!!}
  {!!Html::script('public/assets/backend/js/datepicker/js/jquery.plugin.min.js')!!}
  {!!Html::script('public/assets/backend/js/datepicker/js/jquery.datepick.js')!!}
  <script>
    $(document).ready(function(){
      $('input[name="date"]').datepick({
        dateFormat: 'dd-mm-yyyy'
      });
    })
  </script>
@stop
