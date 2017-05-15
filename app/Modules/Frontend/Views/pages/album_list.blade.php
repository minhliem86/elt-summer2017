@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Hình ảnh')

@section('meta-share')
  <meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
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
                    <p class="text-title">Nhận Ngay Ưu Đãi 3,500,000 VNĐ Trước 30/04</p>
                    <div class="wrap-btn">
                      <a href="{!!route('f.getContact')!!}" class="btn btn-white">Đăng ký ngay</a>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </header>
  </div>
</div>

@if($acti->count() > 0)

<div class="container">
  <div class="row">
    <section class="album">
      <div class="container-fluid">
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <div class="wrap-title-album">
          <h2>{!!$acti->title!!}</h2>
        </div>
        <div class="load-photo">
          <div class="container-fluid">
            <div class="row">
              @foreach($acti->albums()->orderBy('order','DESC')->get() as $item_album)
              <div class="col-sm-4">
                <div class="each-album">
                    <a href="{!!route('f.getImage',$item_album->slug)!!}">
                      <div class="overlay">
                        <img src="{!!$item_album->img_url!!}" class="img-responsive" alt="">
                        <i class="link fa fa-link"></i>
                      </div>
                      <h3 class="title-album">{!!Str::words($item_album->title, 10)!!}</h3>
                    </a>
                </div>  <!-- end each-album -->
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endif

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
