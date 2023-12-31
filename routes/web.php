<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
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

Route::get('/', function () {
   // return '<a href="about">hello world</a>';
   return view('welcome');
});
//Route::get('/about', [PageController::class, 'about']);
// Route::get('phpmyinfo', function () {
//     phpinfo(); 
// })->name('phpmyinfo');
// Route::get('articles', function () {
//     $articles = App\Models\Article::all();
//     return view('articles', ['articles'=> $articles]);
// });
Route::get('articles', [ArticleController::class, 'index'])
->name('articles.index');
Route::get('articles/create',[ArticleController::class,  'create'])
  ->name('articles.create');
Route::post('articles', [ArticleController::class, 'store'])
  ->name('articles.store');
Route::get('articles/{id}', [ArticleController::class, 'show'])
->name('articles.show');
// Route::get('articles/{articleId}/comments/{id}', function($articleId, $id){
   // $comment = f

//});