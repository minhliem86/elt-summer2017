<button data-remodal-action="close" class="remodal-close"></button>
<h1>{!!$video->title!!}</h1>
<div class="body-modal">
  <div data-type="youtube" data-video-id="{!!$video->video_url!!}"></div>
</div>
<script>
  $(document).ready(function(){
    let video = plyr.setup();

    // EVENT CLOSE REMODAL
    $(document).on('closed', '.remodal', function (e) {
        video[0].destroy()
    });
  })
</script>
