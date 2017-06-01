@extends('Admin::layouts.layout')

@section('content')
 <section class="content-header">
  <h1>
    Center Page
    <!-- <small>Optional description</small> -->
  </h1>
  <!-- <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol> -->
</section>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<div class="pull-right">
						<a href="{!!route('admin.happykiddom.create')!!}" class="btn btn-info btn-xs"> Add Schedule </a>
					</div>
				</div>
				<!-- /.box-header -->
        @if($center->count() != 0)
				<div class="box-body">
				  <table id="table-post" class="table table-bordered table-striped">
				    <thead>
					    <tr>
							<th>ID</th>
							<th data-width="60%">Center Name</th>
							<th>Schedule</th>
						</tr>
				    </thead>
				    <tbody>
					    @foreach($center as $item)
						<tr>
							<td >{!!$item->id!!}</td>
							<td><b>{!! $item->name_vi!!}</b></td>
							<td>

							@if(count($item->kiddomschedules))
								<a href="{!!route('admin.happykiddom.edit',$item->kiddomschedules->id)!!}" class="btn btn-info btn-xs"> Edit Schedule </a>
							@endif

							</td>
						</tr>
						@endforeach
				    </tbody>
				    <tfoot>

				    </tfoot>

				  </table>
				</div>
				@else
					<h2 class="text-center">No Data</h2>
				@endif
            <!-- /.box-body -->
			</div>
			</div>	<!-- end ajax-table-->

		</div>
	</div>
</section>
@stop

@section('script')
	<!-- SCRIPT -->
	{!!Html::style(asset('public/assets/backend').'/js/DataTables/datatables.min.css')!!}
	{!!Html::script(asset('public/assets/backend').'/js/DataTables/datatables.min.js')!!}


	<script type="text/javascript">
		$(document).ready(function(){
			{!! Notification::showSuccess('alertify.success(":message");') !!}
			{!! Notification::showError('alertify.error(":message");') !!}

			var table = $('#table-post').DataTable({
				'ordering': false,
				"bLengthChange": false,
				"iDisplayLength": 20,
				"bFilter" : false,
			});
			/*SELECT ROW*/
			$('#table-post tbody').on('click','tr',function(){
				$(this).toggleClass('selected');
			})

		})

		function confirm_remove(a){
			alertify.confirm('You can not undo this action. Are you sure ?', function(e){
				if(e){
					a.parentElement.submit();
				}
			});
		}
	</script>
@stop