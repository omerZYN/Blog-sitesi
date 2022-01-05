<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

use App\Models\Follower;

class FollowersController extends Controller
{
    public function index(){
      $followers=Follower::orderBy('name','asc')->get();
      return view('followers/index',compact('followers'));
    }
    public function update($id){
      $followers=Follower::findOrFail($id);
      return view('followers/update',compact('followers'));
    }
    public function updatefollowers(Request $request, $id){
      $followers= Follower::findOrFail($id);
      $followers->name=$request->name;
      $followers->job=$request->job;

      if($request->hasFile('image')){
        $imageName=Str::slug($request->name).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $followers->image='/uploads/'.$imageName;
      }
      $followers->facebook=$request->facebook;
      $followers->twitter=$request->twitter;
      $followers->instagram=$request->instagram;
      $followers->linkedin=$request->linkedin;

      $followers->save();
      return redirect()->route('followers_update',$followers->id);
    }


}
