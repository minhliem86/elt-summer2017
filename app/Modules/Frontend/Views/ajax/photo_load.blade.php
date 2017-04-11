<div class="container-fluid">
  <div class="row">
    <div class="col-md-5">
      <div class="wrap-left-img">
        <img src="{!!$img->img_url!!}" class="img-responsive" alt="{!!$img->title!!}">
        <div class="btn-control btn-prev">
          <img src="{!!asset('public/assets/frontend')!!}/images/btn-prev.png" alt="">
        </div>
        <div class="btn-control btn-next">
          <img src="{!!asset('public/assets/frontend')!!}/images/btn-next.png" alt="">
        </div>
      </div>  <!-- end wrap-img-->
    </div>
    <div class="col-md-7">
      <h3 class="title-img">{!!$img->title!!} </h3>
      <p class="desc-img">{!!$img->description!!}</p>
      <div class="wrap-btn-social">
          <a href="#"><img src="{!!asset('public/assets/frontend')!!}/images/fb-icon.png" alt="" class="img-responsive"></a>
          <a href="#"><img src="{!!asset('public/assets/frontend')!!}/images/download-icon.png" alt="" class="img-responsive"></a>
      </div>
    </div>
  </div>
</div>
