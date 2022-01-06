<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;


use App\Models\about;


class AboutController extends Controller
{
  public function index(){
    $abouts=About::all();
    return view('about/index',compact('abouts'));
  }

  public function updateabouts(Request $request, $id){
    $abouts= About::findOrFail($id);
    $abouts->title=$request->title;
    $abouts->content=$request->content;

    if($request->hasFile('image')){
      $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
      $request->image->move(public_path('uploads'),$imageName);
      $abouts->image='/uploads/'.$imageName;
    }
    $abouts->vizyon=$request->undertitle1;
    $abouts->misyon=$request->undertitle2;
    $abouts->gelecek=$request->undertitle3;

    $abouts->save();
    return redirect()->route('hakkimda_index');
  }

}
