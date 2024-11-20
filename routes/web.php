<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/article',function (Request $request){
    $search = $request->input('search');
    if ($search) {
        $articles = Article::where('title', 'like', '%' . $search . '%')
                           ->get();
    } else {
        $articles = Article::all();
    }
    return view('article', compact('articles', 'search')); 
})->name('article');

Route::get('/article/{id}',function ($id){
    $article = Article::find($id);
    return view('article-detail',compact('article'));
})->name('article.show');

// Authenticate
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'authenticate'])->name('login.post');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

// Admin
Route::get('/admin',[AdminController::class,'index'])->name('admin')->middleware('auth');

// Category
Route::get('/admin/category',[AdminController::class,'category'])->name('admin.category')->middleware('auth');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin.category.create')->middleware('auth');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin.category.store')->middleware('auth');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit')->middleware('auth');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update')->middleware('auth');
Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete')->middleware('auth');

// Article
Route::get('/admin/article/create',[ArticleController::class,'create'])->name('admin.article.create')->middleware('auth');
Route::post('/admin/article/store',[ArticleController::class,'store'])->name('admin.article.store')->middleware('auth');
Route::get('/admin/article/edit/{id}',[ArticleController::class,'edit'])->name('admin.article.edit')->middleware('auth');
Route::post('/admin/article/update/{id}',[ArticleController::class,'update'])->name('admin.article.update')->middleware('auth');
Route::get('/admin/article/delete/{id}',[ArticleController::class,'delete'])->name('admin.article.delete')->middleware('auth');