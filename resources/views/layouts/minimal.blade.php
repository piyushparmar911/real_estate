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
    body {
      background: #f8f9fa;
    }
    .minimal-container {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .auth-card {
      background: white;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      padding: 40px;
      width: 100%;
      max-width: 500px;
    }
    .logo-container {
      text-align: center;
      margin-bottom: 30px;
    }
    .logo-container img {
      max-height: 60px;
    }
  </style>
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
<div class="minimal-container">
  <div class="auth-card">
    <div class="logo-container">
      <a href="{{ url('/') }}">
        <img src="{{ asset('images/header-logo2.png') }}" alt="FindHouse Logo">
      </a>
    </div>
    
    <!-- Page Content -->
    @yield('content')
  </div>
</div>

<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@stack('scripts')
</body>
</html>
