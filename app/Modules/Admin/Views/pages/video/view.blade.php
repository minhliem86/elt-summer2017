@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Video</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($video,array('route'=>array('admin.video.update',$video->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))!!}
      <div class="form-group">
        <label for="" >Avatar</label>
        <p>
          <img src="{!!$video->img_url!!}" width="150" alt="">
          {!!Form::hidden('img-bk',$video->img_url)!!}
        </p>
        {!!Form::file('img')!!}
      </div>
				<div class="form-group">
					<label for="">Title</label>
					{!!Form::text('title',old('title'),array('class'=>'form-control'))!!}
				</div>
        <div class="form-group">
					<label for="">Video ID</label>
					{!!Form::text('video_url',old('video_url'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="" >Description</label>
					{!!Form::textarea('description',old('description'),array('class'=>'form-control ckeditor'))!!}
				</div>

				<div class="form-group">
					<label for="" >Sort</label>
					{!!Form::text('order',old('order'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<span class="inline-radio"><input type="radio" name="status" value="1" {!!$video->status == 1 ? 'checked' : ''!!}> <b>Active</b> </span>
					<span class="inline-radio"><input type="radio" name="status" value="0" {!!$video->status == 0 ? 'checked' : ''!!}> <b>Deactive</b> </span>
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
<script>

</script>
@stop
