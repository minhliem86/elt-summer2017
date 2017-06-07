@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Các hoạt động tại ILA Summer 2017')

@section('meta-share')
  <meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
@stop

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/customize.min.css">
@stop

@section('content')
    <div class="container">
      <div class="row">
        <header class="top-header">
          <div class="container-fluid">
              <div class="row">
                  <div>
                    <img src="{!!asset('public/assets/frontend')!!}/images/banner-01.png" class="img-responsive visible-md visible-lg" alt="">
                    <img src="{!!asset('public/assets/frontend')!!}/images/banner-mobile-homepage.png" class="img-responsive visible-sm visible-xs" alt="">
                  </div>
                  <div class="wrap-title">
                    <div class="stage far-cloud" id="far-cloud"></div>
                    <div class="stage near-cloud" id="near-cloud"></div>
                    <div class="title-header">
                        <h1>CHƯƠNG TRÌNH ANH VĂN HÈ 2017</h1>
                        {{-- <p class="text-title">Nhận Ngay Ưu Đãi 3,000,000 VNĐ Trước 31/05</p> --}}
                        <div class="wrap-btn">
                          <a href="{!!route('f.getContact')!!}" class="btn btn-white">Đăng ký ngay</a>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </header>
      </div>
    </div>

    <div class="container">
      <div class="row">
            <section class="event-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2>Lịch hoạt động</h2>
                            <div class="wrap-event">
                                <table border="1" class="table-event table ">
                                    <thead>
                                        <tr>
                                            <th width="30%">Hoạt Động</th>
                                            <th width="15%">Ngày diễn ra hoạt động</th>
                                            <th width="15%">Buổi</th>
                                            <th width="30%">Địa Điểm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p>- HAPPINESS PROGRAM</p>
                                                <p>- MAGIC ICE CREAM</p>
                                                <p>- DANCE</p>
                                            </td>
                                            <td>
                                                <p>12-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Buổi sáng</p>
                                            </td>
                                            <td>
                                                <p>WHITE PALACE</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- BASKETBALL </p>
                                            </td>
                                            <td>
                                                <p>14-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Buổi chiều</p>
                                            </td>
                                            <td>
                                                <p>Nhà thi đấu Canada - Q7</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- HAPPINESS PROGRAM </p>
                                                <p>- DANCE </p>
                                            </td>
                                            <td>
                                                <p>19-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Buổi sáng</p>
                                            </td>
                                            <td>
                                                <p>WHITE PALACE</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- BASKETBALL  </p>
                                            </td>
                                            <td>
                                                <p>26-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Buổi sáng</p>
                                            </td>
                                            <td>
                                                <p>Nhà thi đấu Hồ Xuân Hương - Q3</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- ADVENTURES </p>
                                            </td>
                                            <td>
                                                <p>27-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Cả  ngày</p>
                                            </td>
                                            <td>
                                                <p>- MADAGUI</p>
                                                <p>- Rừng Quốc Gia Nam Cát Tiên</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- MOVIE</p>
                                            </td>
                                            <td>
                                                <p>30-06-2017</p>
                                            </td>
                                            <td>
                                                <p>Buổi chiều</p>
                                            </td>
                                            <td>
                                                <p>CGV</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>- FARM</p>
                                            </td>
                                            <td>
                                                <p>10-07-2017</p>
                                            </td>
                                            <td>
                                                <p>Cả ngày</p>
                                            </td>
                                            <td>
                                                <p>Nông trại Bình Dương</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
      </div>
  </div>

  @include('Frontend::layouts.footer-orange')

@stop
