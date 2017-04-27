@foreach($album->chunk(4) as $chunk)
<div class="row">
  @foreach($chunk as $item_album)
  <div class="col-sm-4">
    <div class="each-album">
        <a href="{!!route('f.getImage',$item_album->slug)!!}">
          <div class="overlay">
            <img src="{!! $item_album->images()->first() ? $item_album->images()->first()->img_url : ''!!}" alt="">
            <i class="link fa fa-link"></i>
          </div>
          <h3 class="title-album">{!!Str::words($item_album->title, 10)!!}</h3>
        </a>
    </div>  <!-- end each-album -->
  </div>
  @endforeach
</div>
@endforeach
