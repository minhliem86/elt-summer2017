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
          <h4>{!!$last_testi->author!!}</h4>
        </div>
      </div>
    </div>
</div>
<div class="box-slider-top visible-sm visible-xs">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 col-lg-7">
            <div class="box-img">
                <img src="{!!$last_testi->img_url!!}" alt="">
            </div>
        </div>
        <div class="col-md-6 col-lg-5">
            <h4>{!!$last_testi->title!!}</h4>
            <p>{!!Str::words($last_testi->content,40)!!}</p>
            <h4>{!!$last_testi->author!!}</h4>
        </div>
      </div>
    </div>
</div>
@endif
