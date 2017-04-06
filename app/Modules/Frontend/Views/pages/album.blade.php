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
        <center class="banner col-xs-12">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <center>
            <h2>Hình Ảnh Các Hoạt Động Hè {!!$year!!}</h2>
        </center>
        <div class="row">
          @foreach($album as $item_album)
          <div class="col-sm-3">
            <div class="each-album">
                <img src="" alt="">
                <div class="overlay">
                  <h2 class="title-album">{!!Str::words($item_album->title, 4)!!}</h2>
                </div>
            </div>  <!-- end each-album -->
          </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
</div>
@endif
@stop
