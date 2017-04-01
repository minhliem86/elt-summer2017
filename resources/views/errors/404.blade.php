@extends('Frontend::layouts.default')

@section('title','Not Found')

@section('content')
<div class="container">
  <header class="top-header">
    <div >
        <img src="{!!asset('public/assets/frontend')!!}/images/banner-01.png" class="img-responsive visible-md visible-lg" alt="">
        <img src="{!!asset('public/assets/frontend')!!}/images/banner-mobile-homepage.png" class="img-responsive visible-sm visible-xs" alt="">
    </div>
    <div class="title-header">
        <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
    </div>
  </header>
</div>

<div class="container">
  <section class="wel-come">

    <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-bg-01.png" class="img-responsive img-leaf leaf1" alt="Amazing Summer">
    <div class="container-fluid">
        <div class="row">
            <center class="banner col-sm-8 col-sm-offset-2">
                <h2>Rất tiếc, trang bạn truy cập không tồn tại.</h2>
            </center>
        </div>
    </div>
  </section>
</div>
@stop
