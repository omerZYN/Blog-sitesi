
@extends('front.layouts.master')
@section('content')
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
          <h3 class="section-title">Yazılarım</h3>
          <p class="section-description">İsyan edene kadar bilinçlenmeyecekler, bilinçlenene kadar isyan etmeyecekler.</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Tümü</li>
              @foreach($categories as $category)
              <li data-filter=".filter-app">{{$category->name}}</li>
            @endforeach
            </ul>
          </div>
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

      </div>
    </section><!-- #portfolio -->




  </main>

@endsection
