<?php

namespace App\Http\Controllers\back;


use Illuminate\Support\Str;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
      $categories=Category::all();
      return view('category/index',compact('categories'));
    }

    public function create(Request $request){
      $isExist=Category::whereSlug(Str::slug($request->category))->first();
      if($isExist){
        return redirect()->back();
      }
      $category = new Category;
      $category->name=$request->category;
      $category->slug=Str::slug($request->category);
      $category->save();
      return redirect()->back();
    }
//bozuk
    public function getData(Request $request){
//  $category=Category::findOrFail($request->id);
//   return response()->json($category);
  return "elma";
    }
}
