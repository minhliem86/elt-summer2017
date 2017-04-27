
  <div class="wrap-left-img">
    <div class="btn-control btn-prev">
      <img src="{!!asset('public/assets/frontend')!!}/images/btn-prev.png" data-id="{!!$img->id!!}" data-id-album="{!!$img->album_id!!}" alt="{!!$img->title!!}">
    </div>
    <div class="btn-control btn-next">
      <img src="{!!asset('public/assets/frontend')!!}/images/btn-next.png" data-id="{!!$img->id!!}" data-id-album="{!!$img->album_id!!}" alt="{!!$img->title!!}">
    </div>
    <img src="{!!$img->img_url!!}" class="img-responsive" alt="{!!$img->title!!}">
    <h3 class="title-img">{!!$img->title!!} </h3>
    <p class="desc-img">{!!$img->description!!}</p>
    <div class="wrap-btn-social">
        <img src="{!!asset('public/assets/frontend')!!}/images/fb-icon.png" alt="Share on Facebook" class="img-responsive img-social share s_facebook hidden-sm hidden-xs">
        <a href="{!!$img->img_url!!}" title="Download" download="ila_img_{!!$img->id!!}"><img src="{!!asset('public/assets/frontend')!!}/images/download.png" alt="" class="img-responsive img-social"></a>
    </div>
  </div>  <!-- end wrap-img-->
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.img-social').click(function(){
      FBShareOp("{!!$img->title!!}", "{!!$img->description!!}", "{!!$img->img_url!!}", "{!!route('f.getPhotoDetail',$img->id)!!}", 'ILA Amazing Summer');
    })
  })
</script>
