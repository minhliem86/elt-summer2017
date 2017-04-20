@if($list_center)
  {!!Form::select('id_center',[''=>'Chọn trung tâm ILA']+$list_center,old('id_center'), ['class'=>'form-control','id'=>'id_center'] )!!}
@else
<select class="form-control col-sm-6" name="id_center" id="id_center">
    <option value="">Chọn trung tâm</option>
</select>
@endif
