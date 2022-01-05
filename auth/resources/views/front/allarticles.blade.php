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

  </header><!-- #header -->
  <!--==========================
    Hero Section
  ============================-->

  <main id="main">


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Tüm Yazılarım</h3>
          <p class="section-description">İsyan edene kadar bilinçlenmeyecekler, bilinçlenene kadar isyan etmeyecekler.</p>
        </div>


        <div class="row" id="portfolio-wrapper">
          @foreach($articles as $article)
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="{{route('page',$article->slug)}}">
              <img src="{{$article->image}}" alt="">
              <div class="details">
                <h4>{{$article->title}}</h4>
                <span>{!!\Illuminate\Support\Str::limit($article->content,30)!!}</span>
              </div>
            </a>
          </div>
        @endforeach

        </div>
<div class="text-center"> <a  href="{{route('homee')}}">Geri dön</a> </div>
      </div>
    </section><!-- #portfolio -->




  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SeyhHulud</strong>
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Regna
        -->
          <a href="">ZNY</a> tarafından yapılmıştır.
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{asset('front/')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('front/')}}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{asset('front/')}}/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('front/')}}/lib/easing/easing.min.js"></script>
  <script src="{{asset('front/')}}/lib/wow/wow.min.js"></script>
  <script src="{{asset('front/')}}/lib/waypoints/waypoints.min.js"></script>
  <script src="{{asset('front/')}}/lib/counterup/counterup.min.js"></script>
  <script src="{{asset('front/')}}/lib/superfish/hoverIntent.js"></script>
  <script src="{{asset('front/')}}/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="{{asset('front/')}}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('front/')}}/js/main.js"></script>

  </body>
  </html>
