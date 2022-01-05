@extends('layouts.master')
@section('content')
<div class="row">
  <div class="col-md-4">
    <div class="card shadow md-4">
      <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary">  Yeni Kategori Oluştur</h6>
      </div>
      <div class="card-body">

        <form action="{{route('categories_create')}}" method="post">
          @csrf
          <div class="form-group">
            <label>Kategori Adı</label>
            <input type="text" class="form-control" name="category" required />
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Ekle</button>

          </div>

        </form>
      </div>
    </div>

  </div>
  <div class="col-md-8">
    <div class="card shadow md-4">
      <div class="card header py-3">
        <h6 class="m-0 font-weight-bold text-primary">  Tüm Kategoriler</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kategori Adı</th>
                        <th>Yazı Sayısı</th>
                        <th>İşlemler</th>
                    </tr>
                </thead>
                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->articlecount()}}</td>
                        <td>
                          <a category-id="{{$category->id}}" href="#" class="btn btn-sm btn-primary edit-click" title="Kategoriyi Düzenle" > <i class="fa fa-edit text-white"></i> </a>
                        </td>

                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
      </div>
    </div>

  </div>

</div>
@endsection
@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>

  $(function() {

    $('.edit-click').click(function(){
      id = $(this)[0].getAttribute('category-id');
      $.ajax({
        type:'GET',
        url:'{{route('categories_GetData')}}',
        data:{id:id},
        success:function(data){
          console.log(data);
        }
      });
    });

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
