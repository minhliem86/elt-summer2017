@extends('Frontend::layouts.default')

@section('title','Amazing Race')

@section('meta-share')

@stop

@section('content')
<div class="container">
  <div class="row">
    <header class="top-header">
      <div class="container-fluid">
          <div class="row">
              <div>
                <img src="{!!asset('public/assets/frontend')!!}/images/banner-01.png" class="img-responsive visible-md visible-lg" alt="">
                <img src="{!!asset('public/assets/frontend')!!}/images/banner-mobile-homepage.png" class="img-responsive visible-sm visible-xs" alt="">
              </div>
              <div class="wrap-title">
                <div class="stage far-cloud" id="far-cloud"></div>
                <div class="stage near-cloud" id="near-cloud"></div>
                <div class="title-header">
                    <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
                </div>
              </div>
          </div>
      </div>
    </header>
  </div>
</div>

@if(!$album->isEmpty())
<div class="container">
  <div class="row">
    <section class="album">
      <div class="container-fluid">
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <div class="wrap-title-album">
          <h2>Hình Ảnh Các Hoạt Động Hè {!!$year!!}</h2>
        </div>
        @foreach($album->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $item_album)
          <div class="col-sm-3">
            <div class="each-album">
                <div class="overlay">
                  <img src="{!! $item_album->images()->first() ? $item_album->images()->first()->img_url : ''!!}" alt="">
                  <a href="#"><i class="link fa fa-link"></i></a>
                </div>
                <h3 class="title-album">{!!Str::words($item_album->title, 10)!!}</h3>
            </div>  <!-- end each-album -->
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </section>
  </div>
</div>
@endif
@stop
