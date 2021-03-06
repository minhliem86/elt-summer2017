@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017')

@section('css')
@stop


@section('meta-share')
<meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/FBshare01.png" />
@stop

@section('content')
  <div class="container">
    <div class="row">
      <header class="top-header">
        <div >
            <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-01.png" class="img-responsive visible-md visible-lg" alt="Banner - Anh Văn Hè"></a>
            <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-mobile-homepage.png" class="img-responsive visible-sm visible-xs" alt="Mobile version - Anh Văn Hè"></a>
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
      </header>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section class="wel-come">
        <img data-enllax-ratio=".3" data-enllax-type="foreground" src="{!!asset('public/assets/frontend')!!}/images/wel-come-bg-01.png" class="img-responsive img-leaf leaf1" alt="Amazing Summer">
        <img data-enllax-ratio=".4" data-enllax-type="foreground" src="{!!asset('public/assets/frontend')!!}/images/wel-come-bg-02.png" class="img-responsive img-leaf leaf2" alt="Amazing Summer">
        <img data-enllax-ratio=".6" data-enllax-type="foreground" src="{!!asset('public/assets/frontend')!!}/images/wel-come-bg-03.png" class="img-responsive img-leaf leaf3" alt="Amazing Summer">
        <div class="container-fluid">
            <div class="row">
                <center class="banner col-xs-12 ">
                    <img class="wow bounceInDown" src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" alt="">
                </center>
                <h2>CHÀO MỪNG BẠN ĐẾN VỚI<br><span>ILA AMAZING SUMMER 2017</span></h2>
                <div class="text-content col-sm-10 col-sm-offset-1">
                    <p style="font-size:15px"><b><i>Một mùa hè con bạn không thể nào quên</i></b></p>
                    <div class="wrap-video">
                    	<div data-type="youtube" data-video-id="VonQApifKcM"></div>
                    </div>
                    <p>ILA Amazing Summer 2017 là hành trình đưa các em đến với mùa hè tuổi thơ trong veo ánh nắng, nụ cười giòn tan ngập tràn niềm vui bất tận, những khoảnh khắc tràn đầy cảm xúc bùng nổ không thể nào quên. </p>
                    <p>Đây là sân chơi tiếng Anh với chuỗi hoạt động phong phú, mới lạ, hấp dẫn, bổ ích, giúp các em vừa học giỏi tiếng Anh, vừa rèn luyện 7 thói quen tích cực trong mùa hè, để các em trở thành thế hệ ưu việt thành công và hạnh phúc.</p>
                    <p>“Vì đây là mùa hè tuyệt vời nhất!”</p>
                    <p>ILA được biết đến với khát khao và tâm huyết kiến tạo sân chơi Tiếng Anh hè độc đáo và bổ ích để các em sẽ được tự do khám phá thế giới của riêng mình, kết bạn, thi thố, phát triển tiếng Anh cùng 6 kỹ năng vượt trội và trở thành đứa trẻ hạnh phúc.</p>
                </div>
                <center class="col-xs-12 wrap-btn">
                    <a href="{!!route('f.getContact')!!}" class="btn btn-white">Đăng ký ngay </a>
                </center>
                <div class="col-xs-12">
                    <div class="wel-come-more col-xs-12 col-sm-4 wow bounceInDown">
                        <div class="box">
                            <div>
                                <h2 class="title">Beyond <br class="xs-hidden">English</h2>
                                <p>Tiếng Anh và 6 kỹ năng thành công <br class="hidden-xs hidden-sm"/>của thế kỷ 21</p>
                                <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-white">Tìm hiểu thêm </a>
                            </div>
                            <img src="{!!asset('public/assets/frontend')!!}/images/wel-more-01.png" alt="">
                        </div>
                    </div>

                    <div class="wel-come-more col-xs-12 col-sm-4 wow bounceInDown">
                        <div class="box">
                            <div>
                                <h2 class="title">Happy <br class="xs-hidden">Kiddom</h2>
                                <p>Vương Quốc Hạnh Phúc Của Thế Hệ Ưu Việt Nhí</p>
                                <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-white">Tìm hiểu thêm </a>
                            </div>
                            <img src="{!!asset('public/assets/frontend')!!}/images/wel-more-02.png" alt="">
                        </div>
                    </div>

                    <div class="wel-come-more col-xs-12 col-sm-4 wow bounceInDown">
                        <div class="box">
                            <div>
                                <h2 class="title">Amazing <br class="xs-hidden">Adventures</h2>
                                <p>Kỷ niệm để đời</p>
                                <br/>
                                <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-white">Tìm hiểu thêm </a>
                            </div>
                            <img src="{!!asset('public/assets/frontend')!!}/images/wel-more-03.png" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </section>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section class="amazinng">
        <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-bg-02.png" class="img-responsive img-funkid wow slideInRight" alt="">
        <!-- <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-bg-01.png" class="img-responsive img-ic-ny" alt=""> -->
        <div class="container-fluid">
            <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-01.png" class="img-responsive ic-amazing" alt="AMAZING RACE">
            <h2>AMAZING RACE</h2>
            <h4>Gay Cấn – Hồi Hộp – Hấp Dẫn – Độc Đáo</h4>
            <div class="row">
                <div class="text-content col-sm-8">
                    <p>Dựa trên cảm hứng cuộc đua AMAZING RACE nổi tiếng thế giới với giải thưởng hấp dẫn, ILA Amazing Race 2017 là một sân chơi đời thực, đòi hỏi người chơi nghe nói Tiếng Anh tốt, có 6 kỹ năng thế kỷ 21 để chinh phục thử thách tại 4 quốc gia trong thời gian ngắn nhất.</p>
                    <p>Ngày 23/4 vừa qua, cuộc đua quy tụ hơn 1,200 học viên xuất sắc của ILA đến từ 7 thành phố: TPHCM, Vũng Tàu, Hà Nội, Hải Phòng, Biên Hòa đã thực sự bước ra khỏi lớp học, hòa mình vào cuộc chơi lớn. Cuộc đua có tất cả 185 đội chơi đi qua 4 địa điểm: Dinh Thống Nhất, Saigon Centre, công viên Lê Thị Riêng và nhà hát Hòa Bình, mỗi địa điểm này đại diện cho một nước, bao gồm: Thụy Sĩ, Anh, Úc, Mỹ.</p>
                    <p>Tại các điểm đến, mỗi đội sẽ giải quyết các nhiệm vụ đặt ra giao tiếp với các giám khảo người nước ngoài để vượt qua thử thách. Qua đó, các bạn trẻ được tiếp xúc với văn hóa các nước để mở rộng thêm kiến thức.</p>
                </div>
                <div class="col-sm-12 wrap-btn">
                    <a href="http://ila.edu.vn/anh-van-he/thu-vien-hinh-anh/amazing-race/photo" class="btn btn-white">Xem hình ảnh</a>
                </div>
            </div>
        </div>
      </section>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section class="gift">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <img src="{!!asset('public/assets/frontend')!!}/images/gift-01.png" class="img-responsive hidden-sm hidden-xs wow slideInLeft" alt="Thế hệ ưu Việt Nhí">
                </div>
                <div class="col-sm-8">
                    <h4>ILA dành tặng ấn phẩm đặc biệt</h4>
                    <h3>7 THÓI QUEN CỦA THẾ HỆ ƯU VIỆT NHÍ</h3>
                    <img src="{!!asset('public/assets/frontend')!!}/images/gift-01.png" class="img-responsive visible-sm visible-xs book-mobile" alt="Thế hệ ưu Việt Nhí">
                    <div class="text-content">
                        <p>ILA trao tặng 10.000 ấn phẩm “7 THÓI QUEN CỦA THẾ HỆ ƯU VIỆT NHÍ” cùng bộ Flashcard do ILA độc quyền hợp tác với tác giả nổi tiếng thế giới SEAN COVEY xuất bản cho học viên chương trình hè 2017 từ 07/4/2017. </p>
                    </div>
                    <div class="wrap-btn">
                        <a href="{!!route('f.getContact')!!}" class="btn btn-white">Đăng ký ngay </a>
                    </div>
                </div>
            </div>
        </div>
      </section>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <section class="feeling">
        <h2>CẢM NHẬN MÙA HÈ</h2>
        <div class="box">
            @if($one_testi)
            <div class="box-item-left">
                <img src="{!!$one_testi->img_url!!}" alt="">
            </div>
            @endif
            <div class="box-item-right">
                @if(!$three_testi->isEmpty())
                  @foreach($three_testi as $item_testi)
                  <div class="box-item-child">
                      <div class="box-child-img">
                          <img src="{!!$item_testi->img_url!!}" alt="Cảm nhận mùa hè">
                      </div>
                      <div class="text-content">
                          <p>{!!$item_testi->title!!}</p>
                          <p>{!!Str::words($item_testi->content,20)!!}</p>
                          <!-- <p class="time-day">01/04/2017</p> -->
                      </div>
                  </div>
                  @endforeach
                @endif

            </div>
        </div>
      </section>
    </div>
  </div>

  @include('Frontend::layouts.register')

  @include('Frontend::layouts.footer-orange')
@stop

@section('script')
	<link rel="stylesheet" type="text/css" href="{!!asset('public/assets/frontend')!!}/js/video/plyr.css">
	<script src="{!!asset('public/assets/frontend')!!}/js/video/plyr.js"></script>
	<script>
	$(document).ready(function(){
		plyr.setup();
	});
	</script>
@stop
