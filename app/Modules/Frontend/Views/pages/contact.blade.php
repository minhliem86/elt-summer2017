@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Liên Hệ')

@section('meta-share')
<meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/FBshare01.png" />
@stop

@section('css')
    <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/customize.min.css">
@stop

@section('content')
<div class="container hidden-sm hidden-xs">
  <div class="row">
    <header class="top-header">
      <div >
          <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-02.png" class="visible-lg visible-md" alt=""></a>
          <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/banner-02.png" class="visible-sm visible-xs" alt=""></a>
      </div>
      <div class="wrap-title">
        <div class="stage far-cloud" id="far-cloud"></div>
        <div class="stage near-cloud" id="near-cloud"></div>
        <div class="title-header">
            <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
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
    <section class="contact">
      <img src="{!!asset('public/assets/frontend')!!}/images/sun.png" class="img-responsive contact-img img-sun" alt="ILA Amazing Summer 2017">
      <img src="{!!asset('public/assets/frontend')!!}/images/contact-bg-leaf.png" class="img-responsive contact-img img-leaf" alt="ILA Amazing Summer 2017">
      <img src="{!!asset('public/assets/frontend')!!}/images/contact-bg-bird.png" class="img-responsive contact-img img-bird" alt="ILA Amazing Summer 2017">

      <div class="container-fluid">
          <div class="row">
              <!-- <center class="banner col-xs-12">
                  <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" class="img-responsive img-key wow bounceInDown" alt="">
              </center> -->
              <!-- <h2>ĐĂNG KÝ NGAY<br><span>ĐỂ NHẬN BỘ QUÀ ĐẶC BIỆT</span><span class="small-text">trước 25/04/2017</span></h2> -->
              <div class="col-sm-7 gift-pack">
                  <!-- <h4 class="title ">bộ quà tặng bao gồm:</h4> -->
                  <!-- <p class="text-on-mobile visible-sm visible-xs">bao gồm</p> -->
                  <div class="wrap-giftpack">
                    <div class="wrap-each-contact">
                      <div class="row">
                          <div class="col-sm-4">
                              <img src="{!!asset('public/assets/frontend')!!}/images/contact-01.png" class="visible-lg visible-md" alt="">
                          </div>
                          <div class="col-sm-8">
                              <ul class="list-promotion">
                                <li>Ưu đãi <b>3,000,000 đồng</b>, áo thun ILA Summmer </li>
                                <li>Ấn phẩm đặc biệt <b>“7 THÓI QUEN CỦA THẾ HỆ ƯU VIỆT NHÍ”</b> của tác giả nổi tiếng thế giới SEAN COVEY do ILA độc quyền phát hành cho 10.000 học viên đầu tiên.</li>
                              </ul>
                          </div>
                      </div>
                    </div>

                    <div class="wrap-each-contact beyond">
                      <div class="container-fluid">
                        <div class="row">
                          <div class="col-sm-12">
                            <h4 class="title-each">ILA Amazing Summer 2017</h4>
                            <p class="text-each">Chương trình Anh ngữ bổ ích nhất mùa hè năm nay! Mùa hè tuổi thơ bùng nổ cảm xúc, ngập tràn niềm vui, vừa học giỏi tiếng Anh, vừa rèn luyện 7 thói quen tích cực:</p>
                            <ul class="list-promotion">
                                <li><b>ILA BEYOND ENGLISH:</b> Tiếng Anh và Phương pháp học tư duy thế kỷ 21 với 6 kỹ năng để thành công.</li>
                                <li><b>ILA HAPPY KIDDOM:</b> Vương Quốc Hạnh Phúc của thế hệ Ưu Việt Nhí với chuỗi hoạt động ngoại khóa sôi nổi lần đầu xuất hiện: chương trình Năng Lượng Hạnh Phúc, Làm Kem Thần Kỳ, CLB Bước Nhảy, CLB Siêu Mẫu,…</li>
                                <li><b>ILA AMAZING ADVENTURES:</b> Kỷ niệm để đời – Khám phá vẻ đẹp thiên nhiên Việt Nam.</li>
                              </ul>
                              <p class="text-each">Hãy cho con một mùa hè không thể nào quên!</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  <!-- end wrap-gift-pack -->
              </div>

              <div class="col-sm-5">
                  <div class="wrap-form">
                    <form action="{!!route('f.postContact')!!}" class="contact-register" method="POST" id="form_summer2017">
                        {!!Form::token()!!}
                        <p class="note">Vui lòng hoàn tất bản thông tin dưới đây, ILA sẽ liên lạc lại với bạn trong 24 giờ tới.</p>
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" name="fullname" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Điện Thoại</label>
                            <input type="tel" name="phone" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Thành Phố</label>
                            {!!Form::select('id_city',['' =>'Chọn Thành Phố'] + $list_city,old('id_city'),['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group" id="wrap-center" >
                            <label>Chọn trung Tâm ILA</label>
                            <select class="form-control" name="id_center" id="id_center">
                              <option value="">Chọn trung tâm ILA</option>
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Bạn có đang là học viên ILA?</label>
                            <div class="wrap-study">
                              <span class="study_inline">
                                <input type="radio" id="yes" name="study_ila" value="1"> <label for="yes">Có</label>
                              </span>
                              <span class="study_inline">
                                <input type="radio" id="no" name="study_ila" value="0" checked=""> <label for="no">Không</label>
                              </span>
                            </div>
                            <div id="error_study_id"></div>
                        </div>

                        <center>
                            <input type="submit" name="btn-submit" value="Đăng ký">
                        </center>
                    </form>
                  </div>

                  @if($errors->has())
                      <div class="alert alert-danger" role="alert">
                          @foreach ($errors->all() as $error)
                          <p>{!!$error!!}</p>
                          @endforeach
                      </div>
                  @endif
              </div>

          </div>
      </div>
    </section>
  </div>
</div>
@include('Frontend::layouts.footer-orange')
@stop
