@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Activity</h1>
</section>
<section class="content">

	<div class="box">
		<div class="container-fluid">
			{!!Form::open(array('route'=>array('admin.activity.store'),'class'=>'formAdmin form-horizontal','files'=>true))!!}
        <div class="form-group">
          <label for="">Image URL</label>
          {!!Form::file('img')!!}
          @if($errors->first('img'))
            <p class="error">{!!$errors->first('img')!!}</p>
          @endif
        </div>
        <div class="form-group">
          <label for="">Center List</label>
          {!!Form::select('center_id',$center_lists,old('center_id'),['class'=>'form-control'])!!}
        </div>
				<div class="form-group">
					<label for="">Title</label>
					{!!Form::text('title',old('title'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="">Content</label>
					{!!Form::textarea('content',old('content'),array('class'=>'form-control ckeditor'))!!}
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
<script>

</script>
@stop
