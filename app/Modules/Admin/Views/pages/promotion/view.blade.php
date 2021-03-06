@extends('Admin::layouts.layout')

@section('content')
<section class="content-header">
  <h1>Modify Promotion</h1>
</section>
<section class="content">
	<div class="box">
		<div class="container-fluid">
			{!!Form::model($promotion,array('route'=>array('admin.promotion.update',$promotion->id),'method'=>'PUT' ,'class'=>'formAdmin form-horizontal','files'=>true))!!}
				<div class="form-group">
					<label for="">Title</label>
					{!!Form::text('title',old('title'),array('class'=>'form-control'))!!}
				</div>
				<div class="form-group">
					<label for="" >Content</label>
					{!!Form::textarea('content',old('content'),array('class'=>'form-control ckeditor'))!!}
				</div>

				<div class="form-group">
					<label for="" >Sort</label>
					{!!Form::text('order',old('order'),array('class'=>'form-control'))!!}
				</div>

				<div class="form-group">
					<label for="" >Image URL</label>
					<p>
						<img src="{!!$promotion->img_url!!}" width="150" alt="">
						{!!Form::hidden('img-bk',$promotion->img_url)!!}
					</p>
					{!!Form::file('img')!!}
				</div>
				<div class="form-group">
					<span class="inline-radio"><input type="radio" name="status" value="1" {!!$promotion->status == 1 ? 'checked' : ''!!}> <b>Active</b> </span>
					<span class="inline-radio"><input type="radio" name="status" value="0" {!!$promotion->status == 0 ? 'checked' : ''!!}> <b>Deactive</b> </span>
				</div>

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
