<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="{!!asset('public/assets/frontend')!!}/css/style.css" rel="stylesheet">

</head>

<body>
  <div class="warpper">
    @include('Frontend::layouts.header')
      @yield('content')

  </div>
  <!-- Custom JS -->
  <script src="{!!asset('public/assets/frontend')!!}/js/jquery-2.1.1.js"></script>
  <script src="{!!asset('public/assets/frontend')!!}/js/bootstrap.min.js"></script>
  @yield('script')
</body>
</html>
