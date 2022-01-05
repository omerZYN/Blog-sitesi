@extends('layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tüm Yazılar
                <br>
                <strong>{{$articles->count()}}yazı bulundu</strong>
                <a href="{{route('articles_ayar')}}" class="btn btn-warning btn-sm"><i>Aktif yazılar</i> </a>

               </h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Fotoğraf</th>
                              <th>Yazı İsim</th>
                              <th>Kategori</th>
                              <th>Oluşturulma Tarihi</th>
                              <th>İşlemler</th>
                          </tr>
                      </thead>
                      @foreach($articles as $article)
                          <tr>
                              <td><img src="{{$article->image}}" width="400" alt=""></td>
                              <td>{{$article->title}}</td>
                              <td>  @if($article->category_id == 1) kitap @endif
                                    @if($article->category_id == 2) Günlük @endif
                                    @if($article->category_id == 3) Düşünce @endif
                                    @if($article->category_id == 4) Tartışma @endif

                               </td>
                              <td>{{$article->created_at}}</td>

                              <td>

                                  <a href="{{route('articles_recycle',$article->id)}}" title="Kurtar" class="btn btn-primary"> <i class="fa fa-recycle "></i> </button>
                                  <a href="{{route('articles_harddelete',$article->id)}}" title="sil" class="btn btn-danger"> <i class="fa fa-times "></i> </button>


                              </td>

                          </tr>
                        @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>

  </div>
@endsection

@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>

  $(function() {
    $('.switch').change(function() {
      id = $(this)[0].getAttribute('article-id');
      statu=$(this).prop('checked');
      $.get("{{route('switch')}}", {id:id,statu:statu}, function(data, status){
        console.log(data);
      });

    })
  })
</script>
@endsection

@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
