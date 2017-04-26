@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017')

@section('meta-share')
  <meta property="og:image" content="{!!$img->img_url!!}" />
@stop

@section('script')
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


<div class="container">
  <div class="row">
    <section class="album">
      <div class="container-fluid">
        <div class="wrap-photo-page">
          <img src="{!!$img->img_url!!}" style="margin:50px auto;" class="img-responsive" alt="{!!$img->title!!}">
        </div>  <!-- end wrap-photo-page-->
      </div>
    </section>
  </div>
</div>
<div class="remodal" data-remodal-id="modal" id="remodal-video">

</div>


@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
