<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



use App\Models\Category;
use App\Models\Article;
use App\Models\Contact;
use App\Models\About;
use App\Models\follower;

use Validator;


class homepage extends Controller
{
  public function index(){
    $data['articles']=Article::orderBy('created_at', 'desc')->get();
    $data['categories']=Category::orderBy('name', 'desc')->get();
    $data['abouts']=About::orderBy('title', 'desc')->get();
    $data['followers']=follower::orderBy('name', 'desc')->get();
    return view('front.homepage',$data);

  }
  public function single($slug){

    $data['article']=Article::whereSlug($slug)->first() ?? abort(404,'böylebir yazı bulunamadı');
    $beta['articles']=Article::orderBy('created_at', 'desc')->get();
    $data['categories']=Category::orderBy('name', 'desc')->get();
    return view('front.posts',$data,$beta);
  }
  public function contactpost(Request $request){

    $rules=[
      'name'=>'required|min:5',
      'email'=>'required|email',
      'subject'=>'required',
      'message'=>'required|min:8'
    ];
    $validate=Validator::make($request->post(),$rules);

    if ($validate->fails()) {
    return redirect()->route('homee')->withErrors($validate)->withInput();
    }

    $contact = new Contact;
    $contact->name=$request->name;
    $contact->email=$request->email;
    $contact->subject=$request->subject;
    $contact->message=$request->message;
    $contact->save();
    return redirect()->route('homee')->with('success','Mesajınız bana ulaştı');
  }
  public function allarticles(){
    $data['articles']=Article::orderBy('created_at', 'desc')->get();
    $data['categories']=Category::orderBy('name', 'desc')->get();
    return view('front/allarticles',$data);

  }








}
