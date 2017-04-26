@foreach($img->chunk(4) as $chunk)
<div class="row">
  @foreach($chunk as $item_img)
  <div class="col-sm-3">
    <div class="each-img" data-img="{!!$item_img->id!!}">
        <div class="overlay"></div>
        <i class="ic-zoom fa fa-search" ></i>
        <img src="{!!$item_img->thumbnail_url!!}"  class="img-responsive" alt="{!!$item_img->title!!}">
    </div>  <!-- end each-image -->
  </div>
  @endforeach
</div>
@endforeach
<div class="row">
  <div class="col-sm-12">
    <div class="text-center wrap-pagination">
      {!!$img->setPath('')->render()!!}
    </div>
  </div>
</div>
