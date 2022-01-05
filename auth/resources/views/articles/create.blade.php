@extends('layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-body">
              <form class="post" action="{{route('articles_kaydet')}}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="form-group">
                  <label>Yazı Başlığı</label>
                  <input type="text" name="title" class="form-control" required value=""></input>
                </div>
                <div class="form-group">
                  <label>Yazı Kategorisi</label>
                    <select class="form-control" name="category">
                      <option value="">Seçim Yapın</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Yazı Resmi  </label>
                  <input type="file" name="image" class="form-control" required value=""></input>
                </div>
                <div class="form-group">
                  <label>Yazı İçeriği</label>
                  <textarea id="editor" name="content" class="form-control" required rows="8" cols="80"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" required class="btn btn-primary" >Yazıyı Oluştur</button>
                </div>

              </form>
          </div>
      </div>

  </div>
@endsection

@section('css')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('js')
  <!-- include summernote css/js -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
$('#editor').summernote(
  {
    'height':300
  }
);
});
</script>







@endsection
