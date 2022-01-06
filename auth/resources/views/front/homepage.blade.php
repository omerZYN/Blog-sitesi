
@extends('front.layouts.master')
@section('content')
  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Hoşgeldin</h1>
      <hr><hr>
      <a href="#portfolio" class="btn-get-started">Yazılarım</a>
    </div>
  </section><!-- #hero -->

  <main id="main">


    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Yazılarım</h3>
          <p class="section-description">İsyan edene kadar bilinçlenmeyecekler, bilinçlenene kadar isyan etmeyecekler.</p>
        </div>
        <div class="row">

        </div>

        <div class="row" id="portfolio-wrapper">



          @foreach ($articles->slice(0, 8) as $article)
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

      </div>
    </section><!-- #portfolio -->

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">
          @foreach ($abouts as $about)

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">{{$about->title}}</h2>
            <p>
              {{$about->content}}
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">{{$about->vizyon}}</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">{{$about->misyon}}</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-bar-chart"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">{{$about->gelecek}}</p>
            </div>

          </div>
        <div width="100" class="col-lg-6"> <img  src="{{asset($about->image)}}" height="400" width="500" alt=""> </div>
          @endforeach

        </div>

      </div>
    </section><!-- #about -->


    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
        </div>
          <div class="col-lg-3 cta-btn-container text-center">
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->


    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Takip Ettiklerim</h3>
          <p class="section-description">Görüşlerini ve yaptıklarını beğindiğim insanlar, sende beğenebilirsin</p>
        </div>
        <div class="row">
          @foreach ($followers as $follower)


          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="{{$follower->image}}" alt=""></div>
              <h4>{{$follower->name}}</h4>
              <span>{{$follower->job}}</span>
              <div class="social">
                <a href="{{$follower->twitter}}"><i class="fa fa-twitter"></i></a>
                <a href="{{$follower->facebook}}"><i class="fa fa-facebook"></i></a>
                <a href="{{$follower->instagram}}"><i class="fa fa-instagram"></i></a>
                <a href="{{$follower->linkedin}}"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Düşüncelerini Bildir</h3>
          <p class="section-description">Düşüncelerin, eksiklerimi görmem ve düzeltmemde bana yardımcı olacak</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>A108 Adam Street<br>New York, NY 535022</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>seyhhulud@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+1 5589 55488 55s</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            @if(session('success'))
            <div class="alert alert-success">
              {{session('success')}}
            </div>
          @endif
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                  <li>
                    {{$error}}
                  </li>
                @endforeach
              </ul>
            </div>
          @endif
            <div class="form">
                        <form class="" action="{{route('contact')}}" method="post">
              <form action="{{route('contact')}}" method="post"  class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="İsmin" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Email adresin" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" value="{{old('subject')}}" placeholder="Hangi konu hakkında yazıyorsun" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Mesajın"  name="message" >{{old('message')}}</textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Mesajını gönder</button></div>
              </form>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

@endsection
