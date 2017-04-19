@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Thư viện các hoạt động')

@section('meta-share')

@stop

@section('script')
  <!--SWIPER-->
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/swiper/css/swiper.min.css">
  <script src="{!!asset('public/assets/frontend')!!}/js/swiper/js/swiper.jquery.min.js"></script>

  <!--PLYR-->
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/video/plyr.css">
  <script src="{!!asset('public/assets/frontend')!!}/js/video/plyr.js"></script>

  <!-- REMODAL -->
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.css"/>
  <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal-default-theme.css">
  <script src="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.js"></script>

  <script>
    $(document).ready(function(){
      let inst_modal = $('[data-remodal-id=modal]').remodal();
      // INSTALL PLYR
      plyr.setup({
        hideControls: true
      });

      let videoSlider = new Swiper('#video-slider',{
        slidesPerView: 4,
        slidesPerColumn: 2,
        spaceBetween: 10,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
      })

      // POPUP VIDEO
      $('.video-container').click(function(){
        const id = $(this).data('video-id');
        console.log(id);
        $.ajax({
          url: '{!!route("f.postAjaxVideo")!!}',
          type: 'POST',
          data:{id: id, _token:$('meta[name="csrf-token"]').attr('content')},
          success:function(data){
            $('#remodal-video').html(data.rs);
            inst_modal.open();
          },

        })
      })
    });
  </script>
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
                    <p class="text-title">Nhận Ngay Ưu Đãi 3,500,000 VNĐ Trước 25/04</p>
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

@if(!$album->isEmpty())
<div class="container">
  <div class="row">
    <section class="album">
      <div class="container-fluid">
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <div class="wrap-video-section">
          <h2>Video Hoạt Động Hè 2017</h2>
          @if(!$video->isEmpty())
          <div class="wrap-video">
            <div class="swiper-container" id="video-slider">
              <div class="swiper-wrapper">
                @foreach($video as $item_video)
                <div class="swiper-slide">
                  <div class="wrap-each-video">
                    <div class="video-container" data-video-id="{!!$item_video->id!!}">
                      <img src="{!!$item_video->img_url!!}" class="img-responsive" alt="">
                      <span class="ic-play"></span>
                    </div>
                    <p class="title-video">
                    {!!$item_video->title!!}</p>
                  </div>  <!-- end each video -->
                </div>
                @endforeach

              </div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div> <!-- end slider video -->
          </div> <!-- end video -->
            @endif
        </div>  <!-- end wrap-video -->
        <div class="wrap-title-album">
          <h2>Hình Ảnh Các Hoạt Động Hè 2017</h2>
        </div>
        @foreach($album->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $item_album)
          <div class="col-sm-3">
            <div class="each-album">
                <div class="overlay">
                  <!-- <img src="{!! $item_album->images()->first() ? $item_album->images()->first()->img_url : ''!!}" alt=""> -->
                  <a href="{!!route('f.getImage',$item_album->id)!!}"><i class="link fa fa-link"></i></a>
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
<div class="remodal" data-remodal-id="modal" id="remodal-video">

</div>
@endif

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
