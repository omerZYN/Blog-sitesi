






@extends('layouts.master')
@section('content')

 <div class="container-fluid">

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
           @foreach ($abouts as $about)
             <form class="post" action="{{route('abouts_update',$about->id)}}" method="post" enctype="multipart/form-data" >
               @method('put')
               @csrf


               <div class="form-group">
                 <label>Başlık</label>
                 <input type="text" name="title" class="form-control" required value="{{$about->title}}"></input>
               </div>
               <div class="form-group">
                 <label>Yazı Resmi</label> <br>
                 <img src="{{asset($about->image)}}" class="img-thumbnail rounded" width="500" alt="">
                 <input type="file" name="image" class="form-control"  value="{{$about->image}}"></input>
               </div>
               <div class="form-group">
                 <label>İçerik</label>
                 <textarea id="editor" name="content" class="form-control" required rows="8" cols="80">{{$about->content}}</textarea>
               </div>
               <div class="form-group">
                 <label>Alt Başlık 1</label>
                 <input type="text" name="undertitle1" class="form-control" required value="{{$about->ara}}"></input>
               </div>
               <div class="form-group">
                 <label>Alt Başlık 2</label>
                 <input type="text" name="undertitle2" class="form-control" required value="{{$about->bara}}"></input>
               </div>
               <div class="form-group">
                 <label>Alt Başlık 3</label>
                 <input type="text" name="undertitle3" class="form-control" required value="{{$about->cara}}"></input>
               </div>

               <div class="form-group">
                 <button type="submit" required class="btn btn-primary" >Yazıyı Güncelle</button>
               </div>
                @endforeach
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
