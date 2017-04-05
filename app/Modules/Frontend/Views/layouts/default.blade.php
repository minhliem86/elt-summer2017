<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="ILA Anh Văn Hè 2017, ILA Amazing Summer 2017, Tiếng Anh Hè 2017">
    <meta name="description" content="LA Amazing Summer 2017 là hành trình đưa các em đến với mùa hè tuổi thơ trong veo ánh nắng, nụ cười giòn tan ngập tràn niềm vui bất tận, những khoảnh khắc tràn đầy cảm xúc bùng nổ không thể nào quên.">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">

    @yield('meta-share')
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />


    <title>@yield('title', 'ILA Amazing Summer 2017')</title>
    <link rel="icon" href="{!!asset('public')!!}/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{!!asset('public/assets/frontend')!!}/css/style.css" rel="stylesheet">
    <!-- FB Fixel-->
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '130923730765955');
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1"
    src="https://www.facebook.com/tr?id=130923730765955&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

    <!--GA-->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-60129748-1', 'auto');
    ga('send', 'pageview');

    </script>
    <!--END GA-->
    <!-- GOOGLE ADS -->
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NNC6V2W');</script>
    <!-- End Google Tag Manager -->

</head>

<body>
	  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNC6V2W"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="warpper">
    @include('Frontend::layouts.header')
      @yield('content')
  </div>


  <!-- Custom JS -->
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery-2.1.1.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/bootstrap.min.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery.validate.min.js"></script>

  <!--THIRD PARTY-->
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery.spritely.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery.enllax.min.js"></script>
  <!--WOW-->
  <link href="{!!asset('public/assets/frontend')!!}/js/wow/libs/animate.css" rel="stylesheet">
  <script src="{!!asset('public/assets/frontend')!!}/js/wow/wow.min.js"></script>
  <script defer>
  $(document).ready(function(){
    $('#far-cloud').pan({fps: 30, speed: 0.3, dir: 'left'});
    $('#near-cloud').pan({fps: 30, speed: 0.5, dir: 'left'});

    /*STELLAR*/
    $(window).enllax();

    /*WOW*/
    let wow = new WOW(
      {
        animateClass: 'animated',
        offset:       200,
      }
    );
    wow.init();
  })
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#form_summer2017').validate({
        errorElement: "span",
        errorPlacement: function(error, element) {
            //Custom position: first name
            if (element.attr("name") == "study_ila" ) {
                $("#error_study_id").text($(error).html());
            }else{
               element.after(error);
            }
        },
        rules: {
          fullname: "required",
          email: {required: true, email: true},
          phone: { required: true, digits: true, minlength: 10, maxlength: 11 },
          id_city: 'required',
          id_center: 'required',
          study_ila: 'required',
        },
        messages: {
          fullname: "Vui lòng điền vào vị trí này",
          email: {
            required: "Vui lòng điền email của bạn",
            email: "Email không hợp lệ"
          },
          phone:{
            required: "Vui lòng điền số điện thoại di động của bạn",
            digits: "Vui lòng điền số điện thoại di động của bạn",
            minlength: "Vui lòng điền số điện thoại di động",
          },
          id_city:"Vui lòng chọn Thành phố",
          id_center: "Vui lòng chọn trung tâm",
          study_ila: "Vui lòng chọn 1 mục bên trên"

        },
        submitHandler: function (form) {
          _swga.postLead();
        }
      });

      /*SELECT CENTER*/
      $('select[name="id_center"]').prop('disabled',true);
      $('select[name="id_city"]').on('change',function(){
        var id_city = $(this).val();
        $.ajax({
          url: "{!!route('f.ajaxCenter')!!}",
          type: "POST",
          data: {id_city: id_city, _token:$('meta[name="csrf-token"]').attr('content') },
          success:function(data){
            $('select[name="id_center"]').prop('disabled',false);
            $('#id_center').remove();
            $('#wrap-center').append(data.rs);
          }
        })
      })
    })
  </script>
  <script type="text/javascript" src="{!!asset('public/dms-analytics.js')!!}"></script>
  <script type="text/javascript">
      _swga.base_url_post = 'http://marketingtool.ilavietnam.edu.vn';
      _swga.init('SW-000016', "form_summer2017", "manual");
      _swga.loadForm({
          fullname: 'fullname',
          phone: 'phone',
          email: 'email',
          id_city: 'id_city',
          id_center: 'id_center',
          study_ila: 'study_ila',
      });
  </script>

  @yield('script')
</body>
</html>
