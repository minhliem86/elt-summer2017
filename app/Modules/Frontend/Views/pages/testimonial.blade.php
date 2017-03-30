@extends('Frontend::layouts.default')

@section('content')
<div class="container">
  <header class="top-header">
      <div class="container-fluid">
          <div class="row">
              <div>
                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-banner.png" class="visible-lg visible-md" alt="">
                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/banner-mobile-testimonial.png" class="visible-sm visible-xs" alt="">
              </div>
          </div>
      </div>
  </header>
</div>
<div class="container">
  <section class="testimonial-top">
      <div class="container-fluid">
          <div class="row">
              <center class="banner col-xs-12">
                  <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
              </center>
              <center>
                  <h2>CẢM NHẬN MÙA HÈ</h2>
              </center>
              <div class="container-fluid box-slider">
                  <div class="box-slider-top">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6 col-lg-7">
                              <div class="box-img">
                                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-5">
                              <h4>LOREM IPSUM DOLOR SIT AMET</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris dolor, ultrices porttitor orci id, luctus bibendum sem. Sed tincidunt ligula eget ipsum luctus lacinia. Sed eget diam leo. Praesent quis mattis nibh.</p>
                              <h4>MR. SIMPLE</h4>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="box-slider-top visible-sm visible-xs">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6 col-lg-7">
                              <div class="box-img">
                                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-5">
                              <h4>LOREM IPSUM DOLOR SIT AMET</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris dolor, ultrices porttitor orci id, luctus bibendum sem. Sed tincidunt ligula eget ipsum luctus lacinia. Sed eget diam leo. Praesent quis mattis nibh.</p>

                              <h4>MR. SIMPLE</h4>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="box-slider-top visible-sm visible-xs">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6 col-lg-7">
                              <div class="box-img">
                                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-5">
                              <h4>LOREM IPSUM DOLOR SIT AMET</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris dolor, ultrices porttitor orci id, luctus bibendum sem. Sed tincidunt ligula eget ipsum luctus lacinia. Sed eget diam leo. Praesent quis mattis nibh.</p>

                              <h4>MR. SIMPLE</h4>
                          </div>
                        </div>
                      </div>
                  </div>
                  <div class="box-slider-top visible-sm visible-xs">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-md-6 col-lg-7">
                              <div class="box-img">
                                  <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                              </div>
                          </div>
                          <div class="col-md-6 col-lg-5">
                              <h4>LOREM IPSUM DOLOR SIT AMET</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi mauris dolor, ultrices porttitor orci id, luctus bibendum sem. Sed tincidunt ligula eget ipsum luctus lacinia. Sed eget diam leo. Praesent quis mattis nibh.</p>

                              <h4>MR. SIMPLE</h4>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="box-slider-bottom visible-lg visible-md">
                <div class="container-fluid">
                  <div class="swiper-container" id="swiper-testi">
                      <!-- Additional required wrapper -->
                      <div class="swiper-wrapper">
                          <!-- Slides -->
                          <div class="swiper-slide">
                            <div class="box-slider-items">
                                <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                                <div class="slider-text">
                                    <p>Lorem ipsum <br>Lorem ipsum</p>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box-slider-items">
                                <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                                <div class="slider-text">
                                    <p>Lorem ipsum <br>Lorem ipsum</p>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box-slider-items">
                                <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                                <div class="slider-text">
                                    <p>Lorem ipsum <br>Lorem ipsum</p>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box-slider-items">
                                <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                                <div class="slider-text">
                                    <p>Lorem ipsum <br>Lorem ipsum</p>
                                </div>
                            </div>
                          </div>
                          <div class="swiper-slide">
                            <div class="box-slider-items">
                                <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/testimonial-slider-01.png" alt="">
                                <div class="slider-text">
                                    <p>Lorem ipsum <br>Lorem ipsum</p>
                                </div>
                            </div>
                          </div>
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

<div class="container">
  <section class="feeling gallery">
      <h2>THƯ VIỆN HÌNH ẢNH</h2>
      <div class="box">
        <div class="box-item-left">
          <div class="box-slider-items">
              <img src="{!!asset('public/assets/frontend')!!}/images/feeling-01.png" alt="">
          </div>
        </div>
        <div class="box-item-right">
          <div class="swiper-container" id="swiper-gallery-thumb">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <div class="box-item-child">
                        <div class="box-child-img active">
                            <img src="{!!asset('public/assets/frontend')!!}/images/feeling-02.png" alt="">
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet consec tetu r adipiscing elit. est eletmentum vulputate</p>
                            <p class="time-day">01/04/2017</p>
                        </div>
                    </div>
                  </div>

                  <div class="swiper-slide">
                    <div class="box-item-child">
                        <div class="box-child-img">
                            <img src="{!!asset('public/assets/frontend')!!}/images/feeling-02.png" alt="">
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet consec tetu r adipiscing elit. est eletmentum vulputate</p>
                            <p class="time-day">01/04/2017</p>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box-item-child">
                        <div class="box-child-img">
                            <img src="{!!asset('public/assets/frontend')!!}/images/feeling-02.png" alt="">
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet consec tetu r adipiscing elit. est eletmentum vulputate</p>
                            <p class="time-day">01/04/2017</p>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box-item-child">
                        <div class="box-child-img">
                            <img src="{!!asset('public/assets/frontend')!!}/images/feeling-02.png" alt="">
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet consec tetu r adipiscing elit. est eletmentum vulputate</p>
                            <p class="time-day">01/04/2017</p>
                        </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="box-item-child">
                        <div class="box-child-img">
                            <img src="{!!asset('public/assets/frontend')!!}/images/feeling-02.png" alt="">
                        </div>
                        <div class="text-content">
                            <p>Lorem ipsum dolor sit amet consec tetu r adipiscing elit. est eletmentum vulputate</p>
                            <p class="time-day">01/04/2017</p>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>

      <div class="container-fluid seasons">
          <div class="row">
              <div class="col-sm-12 seasons-items">
                  <a href="#" class="summer">
                      <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/seasons-01.png" alt="">
                      <div class="slider-text">
                          <h2>Summer 2014</h2>
                      </div>
                  </a>
              </div>
              <div class="col-sm-12 seasons-items">
                  <a href="#" class="summer text-right">
                      <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/seasons-02.png" alt="">
                      <div class="slider-text">
                          <h2>Summer 2015</h2>
                      </div>
                  </a>
              </div>
              <div class="col-sm-12 seasons-items">
                  <a href="#" class="summer">
                      <img src="{!!asset('public/assets/frontend')!!}/images/testimonial/seasons-03.png" alt="">
                      <div class="slider-text">
                          <h2>Summer 2016</h2>
                      </div>
                  </a>
              </div>
          </div>
      </div>
  </section>
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
          height:'350',
          direction:'vertical'
      });


    })
  </script>
@stop
