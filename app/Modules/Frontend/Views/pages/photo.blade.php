@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Hình ảnh')

@section('meta-share')

@stop

@section('script')
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.css"/>
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal-default-theme.css">
<script src="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.js"></script>
<script src="{!!asset('public/assets/frontend')!!}/js/notify.min.js"></script>
<script>
  $(document).ready(function(){
    let inst_modal = $('[data-remodal-id=modal]').remodal();
    $('.each-img').click(function(e){
      const id = $(this).data('img');
      $.ajax({
        'url':'{!!route("f.postAjaxPhoto")!!}',
        'type':"POST",
        'data':{id:id, '_token':$('meta[name="csrf-token"]').attr('content') },
        'success' : function (data){
          $('.body-modal').html(data.result);
          inst_modal.open();
        }
      })
    })

    $(document).on('click','.btn-next img',function(){
      const id = $(this).data('id');
      $.ajax({
        'url':'{!!route("f.postAjaxNextPhoto")!!}',
        'type':"POST",
        'data':{id:id, '_token':$('meta[name="csrf-token"]').attr('content') },
        'success' : function (data){
          $('.body-modal').html(data.result);
          // inst_modal.open();
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            
            $.notify('Không còn ảnh');
            // if(XMLHttpRequest.status === 500){
            //
            // }
        }
      })
    })
  })
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

@if($albumWithImg)
<div class="container">
  <div class="row">
    <section class="image-section">
      <div class="container-fluid">
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <div class="wrap-title-img">
          <h2>{!!$albumWithImg->title!!}</h2>
        </div>
        @foreach($albumWithImg->images()->get()->chunk(4) as $chunk)
        <div class="row">
          @foreach($chunk as $img)
          <div class="col-sm-3">
            <div class="each-img" data-img="{!!$img->id!!}">
                <div class="overlay"></div>
                <i class="ic-zoom fa fa-search" ></i>
                <img src="{!!$img->img_url!!}"  class="img-responsive" alt="{!!$img->title!!}">
            </div>  <!-- end each-image -->
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </section>
  </div>
</div>

<div class="remodal" data-remodal-id="modal" id="remodal-photo">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>{!!$albumWithImg->title!!}</h1>
  <div class="body-modal">

  </div>
</div>
@endif

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
