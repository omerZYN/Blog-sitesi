@extends('layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tüm Takip ettiklerim
               </h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Fotoğraf</th>
                              <th>İsim</th>
                              <th>Oluşturulma Tarihi</th>
                              <th>İşlemler</th>
                          </tr>
                      </thead>
                      @foreach($followers as $follower)
                          <tr>
                              <td><img src="{{$follower->image}}" width="400" alt=""></td>
                              <td>{{$follower->name}}</td>
                              <td>{{$follower->created_at}}</td>
                              <td>
                                <a href="{{route('followers_update',$follower->id)}}" title="Düzenle" class="btn btn-primary">Düzenle <i class="fa fa-pen"></i> </a>


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
