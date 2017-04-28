@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Amazing Race')

@section('meta-share')
<meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
@stop

@section('content')
<div class="container">
  <div class="row">
    <header class="amazinng-page-header">
        <a href="{!!route('f.getContact')!!}"><img src="{!!asset('public/assets/frontend')!!}/images/amazinng-bg-02.png" class="img-responsive img-visual" alt=""></a>
        <div class="container">
            <div class="wrap-title-banner">
              <img src="{!!asset('public/assets/frontend')!!}/images/amazinng-01.png" alt="">
              <h2>AMAZING RACE</h2>
              <h4>Gay Cấn – Hồi Hộp – Hấp Dẫn – Độc Đáo</h4>
              <a href="{!!route('f.getContact')!!}" class="btn btn-white-border">Đăng ký ngay</a>
            </div>
        </div>
    </header>
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

<div class="container">
    <div class="row">
      <section class="amazinng-page">
          <img src="{!!asset('public/assets/frontend')!!}/images/amazing-page-bird.png" class="img-responsive img-bird" alt="">
          <div class="container-fluid">
              <div class="row">
                  <center class="banner col-xs-12">
                      <img src="{!!asset('public/assets/frontend')!!}/images/wel-come-banner.png" class="img-responsive img-key wow bounceInDown" alt="">
                  </center>
                  <h2>ILA AMAZING RACE<span>Gay Cấn – Hồi Hộp – Hấp Dẫn</span></h2>
                  <div class="text-content col-sm-10 col-sm-offset-1">
                      <p>Với niềm tin học tiếng Anh là phải dùng được, ILA Amazing Race là một sân chơi đời thực với giải thưởng hấp dẫn, kết nối 4 quốc gia Anh, Mỹ, Úc, Thụy Sĩ trong lòng TPHCM, đòi hỏi người chơi nghe nói Tiếng Anh tốt, có 6 kỹ năng thế kỷ 21 để chinh phục thử thách tại các quốc gia này.</p>
                      <p>Đây là hoạt động độc quyền của ILA và lần đầu tiên xuất hiện tại HCMC, dựa trên cảm hứng cuộc đua AMAZING RACE nổi tiếng thế giới</p>
                  </div>
                  <div class="col-sm-12 amazinng-page-box">
                      <div class="col-sm-5 col-sm-offset-1">
                          <div class="wrap-each-rule clearfix">
                            <div class="col-sm-4 col-lg-3">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-bag.png" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-8 col-lg-9 box-text">
                                <h4>ĐỐI TƯỢNG</h4>
                                <p>• Học viên ILA đã đạt trình độ Flyer [Intermediate] hoặc trình độ tương đương.</p>
                            </div>
                          </div>

                      </div>
                      <div class="col-sm-5">
                          <div class="wrap-each-rule clearfix">
                            <div class="col-sm-4 col-lg-3">
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-bag.png" class="img-responsive" alt="">
                            </div>
                            <div class="col-sm-8 col-lg-9 box-text">
                                <h4>THÔNG TIN CHUNG:</h4>
                                <p>• Bắt đầu chương trình: 23/04/2017</p>
                                <p>• Thời gian chương trình: 9:00 – 14:00</p>
                            </div>
                          </div>
                      </div>
                      <!-- <div class="col-sm-4">
                        <div class="wrap-each-rule clearfix">
                          <div class="col-sm-4 col-lg-3">
                              <img src="{!!asset('public/assets/frontend')!!}/images/icon-cup-blue.png" class="img-responsive" alt="">
                          </div>
                          <div class="col-sm-8 col-lg-9 box-text">
                              <h4>GIẢI THƯỞNG:</h4>
                              <p>• Lorem ipsum dolor sit amet, </p>
                              <p>• consectetuer adipiscin</p>
                              <p>•  Elit, sed diam</p>
                          </div>
                        </div>
                      </div> -->
                  </div>
              </div>
          </div>
      </section>
    </div>
</div>

<div class="container">
  <div class="row">
    <section class="rules">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h2>THỂ LỆ CUỘC THI</h2>
                    <div class="wrap-rule-content">
                      <p>Ngày 23/4 vừa qua, cuộc đua quy tụ hơn 1,200 học viên xuất sắc của ILA đến từ 7 thành phố: TPHCM, Vũng Tàu, Hà Nội, Hải Phòng, Biên Hòa đã thực sự bước ra khỏi lớp học, hòa mình vào cuộc chơi lớn. Cuộc đua có tất cả 185 đội chơi đi qua 4 địa điểm: Dinh Thống Nhất, Saigon Centre, công viên Lê Thị Riêng và nhà hát Hòa Bình, mỗi địa điểm này đại diện cho một nước, bao gồm: Thụy Sĩ, Anh, Úc, Mỹ.</p>
                      <p>Tại các điểm đến, mỗi đội sẽ giải quyết các nhiệm vụ đặt ra giao tiếp với các giám khảo người nước ngoài để vượt qua thử thách. Qua đó, các bạn trẻ được tiếp xúc với văn hóa các nước để mở rộng thêm kiến thức.</p>
                    </div>
                    <!-- <ul class="list-unstyled">
                        <li>• Sân chơi sẽ tạo ra thử thách Tiếng Anh tại 4 điểm đến Anh, Mỹ, Úc, Thụy Sĩ</li>
                        <li>• Người chơi cần hoàn thành thử thách tại 1 điểm đến để nhận được Visa và tìm manh mối cho điểm đến kế tiếp.</li>
                        <li>• Người chơi phải giao tiếp 100% bằng Tiếng Anh với bất kỳ người nước ngoài nào trên đường đua.</li>
                        <li>• Trong vòng 5 tiếng, cá nhân hoặc tập thể nào sưu tập đủ visa của 4 quốc gia và về đích trước 2h chiều cùng ngày sẽ giành được giải thưởng do ILA trao tặng .</li>
                    </ul> -->
                    <center class="col-xs-12">
                        <a href="{!!route('f.getContact')!!}" class="btn btn-white-border">Đăng ký ngay</a>
                    </center>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>

<!--
<div class="container">
  <div class="row">
    <section class="ILA-footer">
        <div class="container-fluid">
            <div class="row">
                <h2>ILA AMAZING SUMMER 2017</h2>
                <div class="col-sm-12">
                    <div class="col-sm-4 ILA-footer-item">
                        <div class="box">
                            <div>
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-wel-more-01.png" alt="">
                                <h3>Beyond English</h3>
                                <p>Tiếng Anh và 6 kỹ năng thành công của thế kỷ 21</p>
                            </div>
                            <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-yellow">Tìm hiểu thêm</a>
                            <img class="img-margin" src="{!!asset('public/assets/frontend')!!}/images/ila-amazinng-01.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4 ILA-footer-item">
                        <div class="box">
                            <div>
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-crown-blue.png" alt="">
                                <h3>Happy Kiddom</h3>
                                <p>Vương Quốc Hạnh Phúc<br/>Của Thế Hệ Ưu Việt Nhí</p>
                            </div>
                            <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-yellow">Tìm hiểu thêm</a>
                            <img class="img-margin" src="{!!asset('public/assets/frontend')!!}/images/ila-amazinng-02.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-4 ILA-footer-item">
                        <div class="box">
                            <div>
                                <img src="{!!asset('public/assets/frontend')!!}/images/icon-wel-more-03.png" alt="">
                                <h3>Amazing Adventures</h3>
                                <p>Kỷ niệm để đời</p>
                            </div>
                            <a href="{!!route('f.getAmazingSummer')!!}" class="btn btn-yellow">Tìm hiểu thêm</a>
                            <img class="img-margin" src="{!!asset('public/assets/frontend')!!}/images/ila-amazinng-03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </div>
</div>
-->

@include('Frontend::layouts.register')
@include('Frontend::layouts.footer-orange')

@stop
