@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Trải Nghiệm Mùa Hè')

@section('meta-share')
<meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/FBshare01.png" />
@stop

@section('content')
<div class="container">
  <div class="row">
    <header class="top-header">
        <div class="container-fluid">
            <div class="row">
                <div>
                    <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-banner.png" class="visible-lg visible-md" alt=""></a>
                    <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/testimonial/banner-mobile-testimonial.png" class="visible-sm visible-xs" alt=""></a>
                </div>
                <div class="wrap-title">
                  <div class="stage far-cloud" id="far-cloud"></div>
                  <div class="stage near-cloud" id="near-cloud"></div>
                  <div class="title-header">
                      <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
                      <p class="text-title">Nhận Ngay Ưu Đãi 3,000,000 VNĐ Trước 31/05</p>
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
    <section class="testimonial-top">
        <div class="container-fluid">
            <div class="row">
                <center class="banner col-xs-12">
                    <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
                </center>
                <center>
                    <h2>CẢM NHẬN MÙA HÈ</h2>
                </center>
                <div class="container-fluid box-slider">
                    <i class="loading-ic"></i>
                    <div class="load-ajax">
                      @if($last_testi)
                      <div class="box-slider-top visible-lg visible-md">
                          <div class="container-fluid">
                            <div class="row">
                              <div class="col-md-6 col-lg-7">
                                  <div class="box-img">
                                      <img src="{!!$last_testi->img_url!!}" alt="">
                                  </div>
                              </div>
                              <div class="col-md-6 col-lg-5">
                                <h4>{!!$last_testi->title!!}</h4>
                                <p>{!!Str::words($last_testi->content)!!}</p>
                              </div>
                            </div>
                          </div>
                      </div>
                      @if(!$list_testi->isEmpty())
                        @foreach($list_testi as $item_testi_mobile)
                        <div class="box-slider-top visible-sm visible-xs">
                            <div class="container-fluid">
                              <div class="row">
                                <div class="col-md-6 col-lg-7">
                                    <div class="box-img">
                                        <img src="{!!$item_testi_mobile->img_url!!}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-5">
                                    <h4>{!!$item_testi_mobile->title!!}</h4>
                                    <p>{!!$item_testi_mobile->content!!}</p>
                                </div>
                              </div>
                            </div>
                        </div>
                        @endforeach
                      @endif

                      @endif
                    </div>
                </div>
                <div class="box-slider-bottom visible-lg visible-md">
                  <div class="container-fluid">
                    <div class="swiper-container" id="swiper-testi">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @if(!$list_testi->isEmpty())
                            @foreach($list_testi as $item_testi)
                            <div class="swiper-slide">
                              <div class="box-slider-items" data-id="{!!$item_testi->id!!}">
                                  <img src="{!!$item_testi->img_url!!}" alt="">
                                  <div class="slider-text">
                                      <p>{!!Str::words($item_testi->title,10)!!}</p>
                                  </div>
                              </div>
                            </div>
                            @endforeach
                            @endif

                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                  </div>
                </div>  <!-- end swiper-testi -->
            </div>
        </div>
    </section>
  </div>
</div>

@include('Frontend::layouts.footer-orange')
@stop

@section('script')
  <!--SWIPER-->
  <link href="{!!asset('public/assets/frontend')!!}/js/swiper/css/swiper.min.css" rel="stylesheet">
  <script src="{!!asset('public/assets/frontend')!!}/js/swiper/js/swiper.jquery.min.js"></script>

  <!--AMAZING SLIDER-->
  <script src="{!!asset('public/assets/frontend')!!}/js/amazing-slider/amazingslider.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/amazing-slider/initslider-1.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/amazing-slider/slider-ama.js"></script>
  <script>
    $(document).ready(function(){
      var mySwiper = new Swiper('#swiper-testi', {
          speed: 400,
          spaceBetween: 30,
          slidesPerView: 4,
          preventClicks: false,
          preventClicksPropagation: false,
          breakpoints:{
            480:{
              slidesPerView: 1,
              spaceBetween: 0,
            }
          }

      });
      var swiperGalleryThumb = new Swiper('#swiper-gallery-thumb', {
          speed: 400,
          slidesPerView: 3,
          spaceBetween: 0,
          nextButton: '.swiper-button-next',
          prevButton: '.swiper-button-prev',
          height:'350',
          direction:'vertical'
      });


      /*AJAX TESTI*/
      $('.box-slider-items').on('click',function(){
        var id = $(this).data('id');
        $.ajax({
          url: "{!!route('f.postDataTesti')!!}",
          type: "POST",
          data: {id:id, _token:$('meta[name="csrf-token"]').attr('content') },
          beforSend:function(){
            $('.load-ajax').empty();

            $('.loading-ic').fadeIn();
          },
          success:function(data){
            $('.loading-ic').fadeOut();
            // $('.load-ajax').empty();
            $('.load-ajax').html(data.rs);
            // console.log(data.rs);
          }
        })
      })
    })
  </script>
@stop
