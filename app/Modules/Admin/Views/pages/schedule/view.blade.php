@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Schedule</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($schedule,array('route'=>array('admin.schedule.update',$schedule->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))!!}
        <div class="form-group">
          <div class="row">
            <div class="col-md-6">
              <label for="">Center</label>
              {!!Form::select('center_id',$list_center,$schedule->center_id,['class'=>'form-control'])!!}
            </div>
            <div class="col-md-6">
              <label for="">Activity</label>
              {!!Form::select('activity_id',$list_activity,$schedule->scheduleable->id,['class'=>'form-control'])!!}
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

				<div class="form-group">
					<label for="" >Sort</label>
					{!!Form::text('order',old('order'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<span class="inline-radio"><input type="radio" name="status" value="1" {!!$schedule->status == 1 ? 'checked' : ''!!}> <b>Active</b> </span>
					<span class="inline-radio"><input type="radio" name="status" value="0" {!!$schedule->status == 0 ? 'checked' : ''!!}> <b>Deactive</b> </span>
				</div>
				<!-- <div class="form-group">
					<label for="">Nổi bật</label>
					<div>
						<span class="inline-radio"><input type="radio" name="focus" value="1"> <b>Active</b> </span>
						<span class="inline-radio"><input type="radio" name="focus" value="0"> <b>Deactive</b> </span>
					</div>
				</div> -->

				<div class="form-group">
					{!!Form::submit('Save',array('class'=>'btn btn-primary'))!!}
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
