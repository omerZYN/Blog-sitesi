<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{$article->title}}</title>
<!--

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="{{asset('post/')}}/apple-touch-icon.jpg">

        <link rel="stylesheet" href="{{asset('post/')}}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('post/')}}/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="{{asset('post/')}}/css/fontAwesome.css">
        <link rel="stylesheet" href="{{asset('post/')}}/css/light-box.css">
        <link rel="stylesheet" href="{{asset('post/')}}/css/templatemo-style.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="{{asset('post/')}}/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>





    <div class="page-heading">
        <div class="container">
            <div class="heading-content">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
    </div>


    <div class="blog-entries">
        <div class="container">
            <div class="col-md-10">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="single-blog-post">
                                <img src="{{$article->image}}" alt="">
                                <div class="text-content">
                                    <h2>{{$article->title}}</h2>
                                    <span> <a href="#"></a></span>
                                    <p>
                                      {!!$article->content!!}
                                    </p>
                                    <br><br><a href="/">Back to Blog</a></p>
                                    <div class="tags-share">
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="share">
                                                    <li>{{$article->created_at->diffForHumans()}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="side-bar">
                    <div class="recent-posts">
                        <div class="sidebar-heding">
                            <h2>Recent Posts</h2>
                        </div>
                        <ul>

                            @foreach($articles->slice(0, 4) as $article)
                              <li><a href="{{route('page',$article->slug)}}">
                                  <img src="{{$article->image}}" alt="Recent Post 1">
                                  <div class="text">
                                      <h6>{{$article->title}}</h6>
                                      <span>{{$article->created_at->diffForHumans()}}</span>
                                  </div>
                              </li></a>
                          @endforeach
                        </ul>
                    </div>









                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="col-md-12">
                <p>Seyh Hulud tarafından tasarlandı</p>
            </div>
        </div>
    </footer>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('post/')}}/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="{{asset('post/')}}/js/vendor/bootstrap.min.js"></script>

    <script src="{{asset('post/')}}/js/plugins.js"></script>
    <script src="{{asset('post/')}}/js/main.js"></script>

</body>
</html>
