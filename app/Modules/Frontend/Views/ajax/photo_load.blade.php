<div class="container-fluid">
  <div class="row">
    <div class="col-md-7">
      <div class="wrap-left-img">
        <div class="btn-control btn-prev">
          <img src="{!!asset('public/assets/frontend')!!}/images/btn-prev.png" data-id="{!!$img->id!!}" alt="{!!$img->title!!}">
        </div>
        <div class="btn-control btn-next">
          <img src="{!!asset('public/assets/frontend')!!}/images/btn-next.png" data-id="{!!$img->id!!}" alt="{!!$img->title!!}">
        </div>
        <img src="{!!$img->img_url!!}" class="img-responsive" alt="{!!$img->title!!}">
      </div>  <!-- end wrap-img-->
    </div>
    <div class="col-md-5">
      <h3 class="title-img">{!!$img->title!!} </h3>
      <p class="desc-img">{!!$img->description!!}</p>
      <div class="wrap-btn-social">
          <a href="#"><img src="{!!asset('public/assets/frontend')!!}/images/fb-icon.png" alt="" class="img-responsive img-social"></a>
          <a href="{!!$img->img_url!!}" download="ila_img_{!!$img->id!!}"><img src="{!!asset('public/assets/frontend')!!}/images/download.png" alt="" class="img-responsive img-social"></a>
      </div>
    </div>
  </div>
</div>
