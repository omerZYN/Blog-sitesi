<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="utf-8">
  <title> @yield('title','Giyu')</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('front/')}}/img/favicon.png" rel="icon">
  <link href="{{asset('front/')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('front/')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('front/')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('front/')}}/lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('front/')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Regna
    Theme URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">Hakkımda</a></li>
          <li><a href="#portfolio">Yazılarım</a></li>
          <li><a href="{{route('allarticles')}}">Tüm Yazılarım</a></li>
          <li><a href="#team">Arkadaşlarım</a></li>
          <li><a href="{{ route('login') }}">Giriş Yap</a></li>
          <li><a href="#contact">Benimle konuş</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
