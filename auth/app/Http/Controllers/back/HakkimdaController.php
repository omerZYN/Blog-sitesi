<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HakkimdaController extends Controller
{
    public function index(){
      $abouts=Hakkimda::all();
      return view('about/index',compact('abouts'));
    }
    public function updateabouts(Request $request, $id){
      $abouts= Hakkimda::all();
      $abouts->title=$request->title;
      $abouts->content=$request->content;
      $abouts->slug=Str::slug($request->title);

      if($request->hasFile('image')){
        $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $article->image='/uploads/'.$imageName;
      }

      $article->save();
      return redirect()->route('articles_ayar');
    }
}
