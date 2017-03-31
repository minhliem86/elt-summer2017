@if($list_center)
  {!!Form::select('id_center',[''=>'Chọn trung tâm ILA']+$list_center,old('id_center'), ['class'=>'form-control','id'=>'id_center'] )!!}
@else
  <option value="">Không có trung tâm ILA</option>
@endif
