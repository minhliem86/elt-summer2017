@extends('Frontend::layouts.default')

@section('content')
<div class="container">
  <header class="top-header">
    <div >
        <img src="{!!asset('public/assets/frontend')!!}/images/banner-02.png" class="visible-lg visible-md" alt="">
        <img src="{!!asset('public/assets/frontend')!!}/images/banner-02.png" class="visible-sm visible-xs" alt="">
    </div>
    <div class="title-header">
        <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
    </div>
  </header>
</div>
<div class="container">
  <section class="contact">
    <img src="{!!asset('public/assets/frontend')!!}/images/sun.png" class="img-responsive contact-img img-sun" alt="ILA Amazing Summer 2017">
    <img src="{!!asset('public/assets/frontend')!!}/images/contact-bg-leaf.png" class="img-responsive contact-img img-leaf" alt="ILA Amazing Summer 2017">
    <img src="{!!asset('public/assets/frontend')!!}/images/contact-bg-bird.png" class="img-responsive contact-img img-bird" alt="ILA Amazing Summer 2017">
    <div class="container-fluid">
        <div class="row">
            <center class="banner col-xs12">
                <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" class="img-responsive img-key" alt="">
            </center>
            <h2>ĐĂNG KÝ NGAY<br><span>ĐỂ NHẬN BỘ QUÀ ĐẶC BIỆT</span></h2>
            <div class="col-sm-6 gift-pack">
                <h4 class="title"><span class="visible-lg visible-md">bộ quà tặng</span> bao gồm:</h4>
                <div class="wrap-each-contact gift-mobile visible-xs visible-sm">
                  <div class="row">
                      <div class="col-sm-4">
                          <img src="{!!asset('public/assets/frontend')!!}/images/contact-02.png" alt="">
                      </div>
                      <div class="col-sm-8">
                          <div class="text-content-02">
                              <h4><b>Nhận ngay 3,500,000 đồng và áo thun ILA Summmer </b></h4>
                              <div class="text-content-02">
                                  <p>khi đăng ký trước 25/04/2017</p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <div class="wrap-each-contact">
                  <div class="row">
                      <div class="col-sm-4">
                          <img src="{!!asset('public/assets/frontend')!!}/images/contact-01.png" class="visible-lg visible-md" alt="">
                      </div>
                      <div class="col-sm-8">
                          <p><b>Ấn phẩm đặc biệt</b></p>
                          <h4><b>“7 THÓI QUEN CỦA THẾ HỆ ƯU VIỆT NHÍ”</b></h4>
                          <div class="text-content-02">
                              <p>của tác giả nổi tiếng thế giới SEAN COVEY do ILA độc quyền phát hành cho 10.000 học viên đầu tiên.</p>
                          </div>
                          <img src="{!!asset('public/assets/frontend')!!}/images/contact-01.png" class="img-mobile-book visible-sm visible-xs" alt="">
                      </div>
                  </div>
                </div>

                <div class="wrap-each-contact visible-lg visible-md">
                  <div class="row">
                      <div class="col-sm-4">
                          <img src="{!!asset('public/assets/frontend')!!}/images/contact-02.png" alt="">
                      </div>
                      <div class="col-sm-8">
                          <div class="text-content-02">
                              <h4><b>Nhận ngay 3,500,000 đồng và áo thun ILA Summmer </b></h4>
                              <div class="text-content-02">
                                  <p>khi đăng ký trước 25/04/2017</p>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
            </div>

            <div class="col-sm-6">
                <form class="contact-register">
                    <p class="note">Bạn vui lòng hoàn tất bản thông tin dưới đây, chúng tôi sẽ liên lạc lại với bạn trong 24 giờ tới.</p>
                    <div class="form-group">
                        <label>Họ Tên</label>
                        <input type="text" class="form-control" required placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" required placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Điện Thoại</label>
                        <input type="tel" class="form-control" required placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Thành Phố</label>
                        <select class="form-control">
                            <option>Hồ Chí Minh</option>
                            <option>Hà Nội</option>
                            <option>Đà Nẵng</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Chọn trung Tâm ILA</label>
                        <select class="form-control">
                            <option>HCM 01</option>
                            <option>HCM 02</option>
                            <option>HCM 03</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bạn có đang là học viên ILA?</label>
                        <div class="wrap-study">
                          <span class="study_inline">
                            <input type="radio" id="yes" name="study_ila" value="1" checked> <label for="yes">Có</label>
                          </span>
                          <span class="study_inline">
                            <input type="radio" id="no" name="study_ila" value="0"> <label for="no">Không</label>
                          </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Đặt câu hỏi để nhân được tư vấn</label>
                        <textarea class="form-control"  name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <center>
                        <input type="submit" name="btn-submit" value="Đăng ký">
                    </center>
                </form>
            </div>

        </div>
    </div>
  </section>
</div>
@include('Frontend::layouts.footer-orange')
@stop
