@extends('Frontend::layouts.default')

@section('title','Amazing Summer')

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
                <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-01.png" class="img-responsive visible-md visible-lg" alt=""></a>
                <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-mobile-homepage.png" class="img-responsive visible-sm visible-xs" alt=""></a>
              </div>
              <div class="wrap-title">
                <div class="stage far-cloud" id="far-cloud"></div>
                <div class="stage near-cloud" id="near-cloud"></div>
                <div class="title-header">
                    <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
                </div>
              </div>
          </div>
      </div>
    </header>
  </div>
</div>

<div class="container">
  <div class="row">
    <section class="amazinng-summer-top">
      <img src="{!!asset('public/assets/frontend')!!}/images/amazing-page-bird.png" class="visible-lg visible-md img-bird" alt="">
      <div class="container-fluid">
          <div class="row">
              <center class="banner col-xs-12">
                  <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" class="img-responsive wow bounceInDown" alt="">
              </center>
              <center>
                  <h2><span>ILA AMAZING SUMMER 2017</span></h2>
                  <p style="font-size:15px"><b><i>Một mùa hè con bạn không thể nào quên</i></b></p>
              </center>
              <div class="text-content col-sm-10 col-sm-offset-1">

                  <p>LA Amazing Summer 2017: mùa hè tuổi thơ bùng nổ cảm xúc, ngập tràn niềm vui. Vừa học giỏi tiếng Anh, vừa rèn luyện 7 thói quen tích cực, hãy trở thành Thế Hệ Ưu Việt Nhí thành công và hạnh phúc.“ Vì đây là mùa hè tuyệt vời nhất!”</p>
              </div>
              <center class="col-xs-12 wrap-btn">
                  <a href="{!!route('f.getContact')!!}" class="btn btn-white">Đăng ký ngay</a>
              </center>
          </div>
      </div>
    </section>
  </div>
</div>

<div class="container">
  <div class="row">
    <section class="six-skill">
      <div class="container-fluid">
          <div class="row flex-items-end">
              <div class="col-sm-7">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/icon-wel-more-01.png" alt="">
                  <h2>BEYOND ENGLISH<span>Tiếng Anh và 6 kỹ năng  thành công thế kỷ 21</span></h2>
                  <ul class="list-unstyled">
                      <li>• Chương trình Anh ngữ chất lượng cao </li>
                      <li>• 100% giáo viên bản xứ giàu kinh nghiệm. </li>
                      <li>• Phương pháp học tư duy thế kỷ 21.</li>
                      <li>• Môi trường tương tác thế kỷ 21.</li>
                      <li>• Thoải mái khám phá ngôn ngữ.</li>
                      <li>• Tiếp thu bài hiệu quả.</li>
                      <li>• Giao tiếp tiếng Anh tự tin hơn chỉ qua một mùa hè.  </li>
                  </ul>
                  <a href="{!!route('f.getContact')!!}" class="btn btn-white-border">Đăng ký ngay</a>
              </div>
              <div class="col-sm-5">
                  <div class="box-img">
                      <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/six-skill-01.png" class="wow slideInRight" alt="">
                  </div>
              </div>
          </div>
      </div>
    </section>
  </div>
</div>

<div class="container">
  <div class="row">
    <section class="kiddom summer-page">
      <div class="container-fluid">
            <div class="wrap-kiddom">
              <div class="wrap-title-kiddom">
                <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/icon-crown-blue.png" alt="">
                <h2><span>HAPPY KIDDOM</span><br>Vương Quốc Hạnh Phúc của thế hệ Ưu Việt Nhí</h2>
                <p class="text-kiddom">Với niềm tin hạnh phúc của con trẻ là phần thưởng quý giá nhất cho phụ huynh, ILA liên kết với các đối tác uy tín đem đến hoạt động hè đặc sắc, phù hợp lứa tuổi, để mỗi ngày hè đến trường là một niềm vui. </p>
              </div>
              <div class="content-kiddom clearfix">
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/yoga.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Yoga</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/dienanh.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Điện Ảnh</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/sieumau.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Siêu Mẫu</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/kemaothuat.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">Kem Ảo Thuật</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/lego.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Lắp Ráp Lego</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/nongtrai.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">Chuyến đi nông trại</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/bongro.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Bóng Rổ</h4>
                  </div>
                </div>
                <div class="each-img">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/photo/buocnhay.png" class="img-responsive" alt="">
                  <div class="overlay">
                    <h4 class="title-content">CLB Bước Nhảy</h4>
                  </div>
                </div>
              </div>  <!-- end content kiddom -->
            </div>  <!-- end wrap-kiddom-->
      </div>
    </section>
  </div>
</div>

<div class="container">
  <div class="row">
    <section class="adventures">
      <div class="container-fluid">
          <div class="row flex-items-end">
              <div class="col-sm-6">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/icon-wel-more-03.png"  alt="">
                  <h2><span>AMAZING ADVENTURES</span><br>Kỷ  niệm để đời</h2>
                  <p>Cuộc sống càng công nghệ thì trẻ em càng cần phải về với thiên nhiên. Lần đầu tiên hãy cùng khám phá những khu rừng đẹp nhất Việt Nam với bạn bè, thầy cô và cảm nhận trọn vẹn cuộc sống. </p>
                  <ul class="list-unstyled">
                      <li>• Học hỏi từ thiên nhiên</li>
                      <li>• Trau dồi vốn tiếng Anh</li>
                      <li>• Trải nghiệm để đời thú vị, đáng nhớ</li>
                  </ul>
                  <a href="{!!route('f.getContact')!!}" class="btn btn-white-border">Đăng ký ngay</a>
              </div>
              <div class="col-sm-6">
                  <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-summer/adventures.png" class="wow slideInRight" alt="">
              </div>
          </div>
      </div>
    </section>
  </div>
</div>

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')

@stop
