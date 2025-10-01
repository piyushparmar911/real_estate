<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
  <meta name="description" content="FindHouse - Real Estate HTML Template">
  <meta name="CreativeLayers" content="ATFN">
  <title>@yield('title', 'FindHouse - Real Estate')</title>
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" sizes="128x128" />
  <!-- css file -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
  @stack('styles')
  <style>
    /* Custom spacing adjustments for auth pages */
    .auth-page-content {
      min-height: calc(100vh - 120px);
      padding-top: 20px;
      background: #f8f9fa;
    }
    
    .auth-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 40px 20px;
    }
    
    .auth-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      padding: 40px;
    }
  </style>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="maxw1600 m0a">
<div class="wrapper">
  <div class="preloader"></div>

  <!-- Header -->
  @include('partials.header')

  <!-- Page Content -->
  <div class="auth-page-content">
    <div class="auth-container">
      <div class="auth-card">
        @yield('content')
      </div>
    </div>
  </div>
</div>
<a class="scrollToHome text-thm3" href="#"><i class="flaticon-arrows"></i></a>
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/isotop.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pricing-slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@stack('scripts')
</body>
</html>
