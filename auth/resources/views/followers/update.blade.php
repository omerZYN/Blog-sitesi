






@extends('layouts.master')
@section('content')

 <div class="container-fluid">

     <!-- DataTales Example -->
     <div class="card shadow mb-4">
         <div class="card-body">
             <form class="post" action="{{route('followers_update',$followers->id)}}" method="post" enctype="multipart/form-data" >
               @method('put')
               @csrf



               <div class="form-group">
                 <label>Başlık</label>
                 <input type="text" name="name" class="form-control" required value="{{$followers->name}}"></input>
               </div>
               <div class="form-group">
                 <label>Yazı Resmi</label> <br>
                 <img src="{{asset($followers->image)}}" class="img-thumbnail rounded" width="500" alt="">
                 <input type="file" name="image" class="form-control"  value="{{$followers->image}}"></input>
               </div>
               <div class="form-group">
                 <label>Meslek</label>
                 <input type="text" name="job" class="form-control" required value="{{$followers->job}}"></input>
               </div>
               <div class="form-group">
                 <label>Twitter</label>
                 <input type="text" name="twitter" class="form-control" required value="{{$followers->twitter}}"></input>
               </div>
               <div class="form-group">
                 <label>Facebook</label>
                 <input type="text" name="facebook" class="form-control" required value="{{$followers->facebook}}"></input>
               </div>
               <div class="form-group">
                 <label>İnstagram</label>
                 <input type="text" name="instagram" class="form-control" required value="{{$followers->instagram}}"></input>
               </div>
               <div class="form-group">
                 <label>Linkedin</label>
                 <input type="text" name="linkedin" class="form-control" required value="{{$followers->linkedin}}"></input>
               </div>

               <div class="form-group">
                 <button type="submit" required class="btn btn-primary" >Kişiyi Güncelle</button>
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
