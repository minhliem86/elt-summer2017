@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Hình ảnh')

@section('meta-share')
  <meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
@stop

@section('script')
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.css"/>
<link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/js/remodal/remodal-default-theme.css">
<script src="{!!asset('public/assets/frontend')!!}/js/remodal/remodal.js"></script>
<!-- NOTIFY -->
<script src="{!!asset('public/assets/frontend')!!}/js/notify.min.js"></script>

<!-- FACEBOOK -->

<script type="application/javascript">
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '1046352865465751',
      status     : true,
      xfbml      : true
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

function FBShareOp(name, desc, img, url, capt){
    FB.ui(
    {
      method: 'share',
      title: capt,
      caption: capt,
      description: desc,
      picture: img,
      href : url,
      mobile_iframe: false,
    },function(res){
      if(typeof res !== 'undefined'){

      }else{

      }
    })
}
</script>

<script>
  $(document).ready(function(){
    let inst_modal = $('[data-remodal-id=modal]').remodal();
    $('body').on('click','.each-img',function(){
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
      const id_album = $(this).data('id-album');
      $.ajax({
        'url':'{!!route("f.postAjaxNextPhoto")!!}',
        'type':"POST",
        'data':{id:id, id_album:id_album, '_token':$('meta[name="csrf-token"]').attr('content') },
        'success' : function (data){
          $('.body-modal').html(data.result);
          window.history.pushState({} , '', `#${id}`);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            // $.notify('Không còn ảnh');
            if(XMLHttpRequest.status === 500){
              $.notify('Không còn ảnh');
            }
        }
      })
    })
    $(document).on('click','.btn-prev img',function(){
      const id = $(this).data('id');
      const id_album = $(this).data('id-album');
      $.ajax({
        'url':'{!!route("f.postAjaxPrevPhoto")!!}',
        'type':"POST",
        'data':{id:id, id_album:id_album, '_token':$('meta[name="csrf-token"]').attr('content') },
        'success' : function (data){
          $('.body-modal').html(data.result);
          window.history.pushState({} , '', `#${id}`);
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            if(XMLHttpRequest.status === 500){
              $.notify('Không còn ảnh');
            }
        }
      })
    })

    $('body').on('click', '.pagination a', function(e) {
        e.preventDefault();
        // $('#load a').css('color', '#dfecf6');
        $('#load').append(`<img style="position: absolute; left: 50%; top: 0; transform:translateX(-50%); z-index: 100000;" src="{!!asset('public/assets/frontend')!!}/images/loading.gif" />`);

        var url = $(this).attr('href');
        getPhoto(url);
        window.history.pushState("", "", url);
    });

    function getPhoto(url) {
        $.ajax({
            url : url,
            type: 'GET',
        }).done(function (data) {
            $('.load-photo').html(data);
        }).fail(function () {
            alert('Articles could not be loaded.');
        });
    }

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

@if(!$img->isEmpty())

<div class="container">
  <div class="row">
    <section class="image-section">
      <div class="container-fluid">
        <center class="banner">
            <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
        </center>
        <div class="wrap-title-img">
          <h2>{!!$AlbumTitle!!}</h2>
          <a href="{!!URL::previous()!!}" class="btn-previous">Quay lại</a>
        </div>
        <div class="load-photo">
          @include('Frontend::ajax.loadPhoto')
        </div>
      </div>
    </section>
  </div>
</div>

<div class="remodal" data-remodal-id="modal" id="remodal-photo">
  <button data-remodal-action="close" class="remodal-close"></button>
  <h1>{!!$AlbumTitle!!}</h1>
  <div class="body-modal">

  </div>
</div>
@endif

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')
@stop
