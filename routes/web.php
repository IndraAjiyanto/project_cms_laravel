<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use App\Models\Coment;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TambahController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KoleksiController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/register',[RegisterController::class, 'index'])->name('register');
Route::post('/register',[RegisterController::class, 'store'])->name('tambahRegister');

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/tambah', [TambahController::class, 'index'])->name('tambah');

Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{article:tittle}', [ArticleController::class, 'single'])->name('article_single');

Route::get('/koleksi', [KoleksiController::class, 'index'])->name('koleksi');
Route::get('/koleksi/{user}', function (User $user) {
    return view('koleksi',['tittle'=>$user->name, 'articles'=>$user->articles]);
});

Route::get('/user/{user:name}', function (User $user){
    return view('user_single',['tittle'=>$user->name, 'articles'=>$user->article]);
});

Route::get('/category/{category:name}', function (Category $category){
    return view('category_single',['tittle'=>$category->name, 'articles'=>$category->article]);
});