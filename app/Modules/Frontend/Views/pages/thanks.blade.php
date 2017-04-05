@extends('Frontend::layouts.default')

@section('title','Thank You')

@section('content')
<div class="container">
  <div class="row">
    <header class="top-header">
      <div >
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
    </header>
  </div>
</div>

<div class="container">
  <div class="row">
    <section class="wel-come">

      <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-bg-01.png" class="img-responsive img-leaf leaf1" alt="Amazing Summer">
      <div class="container-fluid">
          <div class="row">
              <center class="banner col-sm-8 col-sm-offset-2">
                  <h2>Cảm ơn bạn đã đăng ký tham gia <Br/>ILA AMAZING SUMMER 2017.</h2>
                  <h4>Nhân viên ILA sẽ liên lạc với bạn trong thời gian sớm nhất.</h4>
              </center>
          </div>
      </div>
    </section>
  </div>
</div>
@stop
