@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Các hoạt động tại ILA Summer 2017')

@section('meta-share')
  <meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
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
        slidesPerView: 3,
        slidesPerColumn: 2,
        spaceBetween: 45,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        breakpoints: {
          '480': {
              slidesPerView: 1,
              slidesPerColumn: 1,
          },
          '768': {
            slidesPerView: 3,
            slidesPerColumn: 1,
          }
        }
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

      // AJAX LOAD MORE PHOTO
      $('#loadmore').click(function(){
        $.ajax({
          url: '{!!route("f.postAjaxGetAllImg")!!}',
          type: 'POST',
          data:{_token:$('meta[name="csrf-token"]').attr('content')},
          success:function(data, textStatus, jqXHR ){
            if(!data.error){
              // console.log(data.rs);
              $('.load-img').empty().append(data.rs);
              $('#loadmore').prop('disabled',true);
            }else{
              $('.load-img').append(`<p>${data.message}</p>`);
            }
          }
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
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        @if(!$video->isEmpty())
        <div class="wrap-video-section">
          <h2>Video Hoạt Động Hè 2017</h2>
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
              <!-- <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div> -->
            </div> <!-- end slider video -->
          </div> <!-- end video -->
        </div>  <!-- end wrap-video -->
        @endif

        @if(!$acti_inst->isEmpty())
        <div class="wrap-title-album">
          <h2>Hình Ảnh Các Hoạt Động Hè 2017</h2>
          @if($acti_inst->count() > 6)
          <button class="btn-loadmore" id="loadmore">Xem tất cả</button>
          @endif
        </div>
        <div class="load-img">
          @foreach($acti_inst->chunk(4) as $chunk)
          <div class="row">
            @foreach($chunk as $item_acti)
            <div class="col-sm-4">
              <div class="each-album">
                  <a href="{!!route('f.getAlbumByAct',$item_acti->slug)!!}">
                    <div class="overlay">
                      <img src="{!! $item_acti->img_url !!}" alt="">
                      <i class="link fa fa-link"></i>
                    </div>
                    <h3 class="title-album">{!!Str::words($item_acti->title, 10)!!}</h3>
                  </a>
              </div>  <!-- end each-album -->
            </div>
            @endforeach
          </div>
          @endforeach
        </div>  <!-- end load image -->
        @endif
      </div>
    </section>
  </div>
</div>
<div class="remodal" data-remodal-id="modal" id="remodal-video">

</div>


@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
