@extends('Frontend::layouts.default')

@section('title','Chương trình Anh Văn Hè 2017 - Các hoạt động tại ILA Summer 2017')

@section('meta-share')
  <meta property="og:image" content="{!!asset('public/assets/frontend')!!}/images/fb-thumb/amazing-race-fb.png" />
@stop

@section('css')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!!asset('public/assets/frontend')!!}/css/customize.min.css">
@endsection

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
        <section class="login-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap-login">
                            <h2>ĐĂNG NHẬP ĐỂ THEO DÕI LỊCH HOẠT ĐỘNG</h2>
                            <div class="wrap-form">
                                {!!Form::open(['route'=>['f.postLogin'],'class'=>'formLogin' ])!!}
                                  <div class="form-group">
                                    {!!Form::text('username',old('username'), ['class'=>'form-control', 'placeholder' => 'Username'] )!!}
                                  </div>
                                  <div class="form-group">
                                    {!!Form::password('password', ['class'=>'form-control',  'placeholder' => 'Password'] )!!}
                                  </div>
                                  <div class="form-group">
                                    {!!Form::submit('Đăng nhập',['class'=> 'btn btn-primary btn-submit'])!!}
                                  </div>
                                {!!Form::close()!!}

                                @if($errors->any())
                                  @foreach($errors->all() as $error)
                                    <p>{!!$error!!}</p>
                                  @endforeach
                                @endif
                                @if(Session::has('success'))
                                    <p>{!!Session::get('success')!!}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      </div>
    </div>
    @include('Frontend::layouts.footer-orange')
@stop
