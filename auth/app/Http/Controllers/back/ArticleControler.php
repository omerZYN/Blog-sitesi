<?php

namespace App\Http\Controllers\back;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Models\Article;
use App\Models\Category;

class ArticleControler extends Controller
{
    public function index(){
      $articles=Article::orderBy('created_at','asc')->get();

      return view('articles.index',compact('articles'));
    }

    public function create(){
      $categories=Category::all();
      return view('articles.create',compact('categories'));
    }

    public function kaydet(Request $request){
      $article=new Article;
      $article->title=$request->title;
      $article->category_id=$request->category;
      $article->content=$request->content;
      $article->slug=Str::slug($request->title);


        $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $article->image='/uploads/'.$imageName;


      $article->save();
      return redirect()->route('articles_ayar');

    }

    public function update($id){
      $article=Article::findOrFail($id);
      $categories=Category::all();
      return view('articles.update',compact('categories','article'));
    }

    public function updatepost(Request $request, $id){
      $article= Article::findOrFail($id);
      $article->title=$request->title;
      $article->category_id=$request->category;
      $article->content=$request->content;
      $article->slug=Str::slug($request->title);

      if($request->hasFile('image')){
        $imageName=Str::slug($request->title).'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('uploads'),$imageName);
        $article->image='/uploads/'.$imageName;
      }

      $article->save();
      return redirect()->route('articles_ayar');
    }
    public function switch(Request $request){
      $article=Article::findOrFail($request->id);
      $article->status=$request->statu=="true" ? 1:0 ;
      $article->save();
    }

    public function delete($id){
      Article::find($id)->delete();
      return redirect()->route('articles_ayar');
    }
    public function trashed(){
      $articles= Article::onlyTrashed()->orderBy('deleted_at','asc')->get();
      return view('articles.trashed',compact('articles'));
    }
    public function recycle($id){
      Article::onlyTrashed()->find($id)->restore();
      return redirect()->route('articles_ayar');
    }
    public function harddelete($id){
      $article=Article::onlyTrashed()->find($id);
      if (File::exists($article->image)) {
        file::delete(public_path($article->image));
      }
      $article->forceDelete();
      return redirect()->route('articles_ayar');
    }





}








//










//
