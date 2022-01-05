<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\front\homepage;
use App\Http\Controllers\back\Dashboard;
use App\Http\Controllers\back\ArticleControler;
use App\Http\Controllers\back\CategoryController;
use App\Http\Controllers\back\AboutController;
use App\Http\Controllers\back\FollowersController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





//frontend
route::get('/',[homepage::class, 'index'])->name('homee');

route::get('/blog/{slug}', [homepage::class, 'single'])->name('page');
route::post('/iletisim', [homepage::class, 'contactpost'])->name('contact');
route::get('/tümyazılar',[homepage::class, 'allarticles'])->name('allarticles');


Auth::routes();





//backend
//yazılar
route::get('home/articles', [ArticleControler::class, 'index'])->name('articles_ayar');
route::get('makaleler/silinenler', [ArticleControler::class, 'trashed'])->name('trashed_article');
route::get('home/create', [ArticleControler::class, 'create'])->name('articles_create');
route::post('home/create', [ArticleControler::class, 'kaydet'])->name('articles_kaydet');
route::get('home/update/{id}', [ArticleControler::class, 'update'])->name('articles_update');
route::put('home/update/{id}', [ArticleControler::class, 'updatepost'])->name('articles_update');
route::get('home/delete/{id}', [ArticleControler::class, 'delete'])->name('articles_delete');
route::get('/switch', [ArticleControler::class, 'switch'])->name('switch');
route::get('home/recycle/{id}', [ArticleControler::class, 'recycle'])->name('articles_recycle');
route::get('home/harddelete/{id}', [ArticleControler::class, 'harddelete'])->name('articles_harddelete');
//Kategoriler
route::get('/categories',[CategoryController::class, 'index'])->name('categories_index');
route::post('/categories/create',[CategoryController::class, 'create'])->name('categories_create');
route::get('/categories/getData',[CategoryController::class, 'getData'])->name('categories_GetData');
//Hakkimda
route::get('/hakkimda', [AboutController::class, 'index'])->name('hakkimda_index');
route::put('/hakkimda/update/{id}', [AboutController::class, 'updateabouts'])->name('abouts_update');
//Takip Ettiklerim
route::get('/takipettiklerim', [FollowersController::class, 'index'])->name('followers_index');
route::get('/takipettiklerim/{id}', [FollowersController::class, 'update'])->name('followers_update');
route::put('/takipettiklerim/{id}', [FollowersController::class, 'updatefollowers'])->name('followers_update');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
