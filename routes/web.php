<?php

use Illuminate\Support\Facades\Route;
use App\Models\Virtual;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/exibitions', function () {
    return view('layout.pages.exibition');
});
Route::get('/exibition/{id}', function () {
    return view('layout.pages.exibitionArts');
});

Route::get('/artists', function () {
    return view('layout.pages.artists');
});
Route::get('/artist/{id}', function () {
    return view('layout.pages.artistArts');
});
Route::get('/art/detail/{id}', function () {
    return view('layout.pages.artDetail');
});
Route::get('/virtual', function () {
    return view('layout.pages.virtual');
});
Route::get('/video', function () {
    $video=Virtual::where('status',1)->first();
    return view('layout.pages.video',compact('video'));
});
Route::get('/news', function () {
    return view('layout.pages.news');
});
Route::get('/contact', function () {
    return view('layout.pages.contactus');
});
Route::get('/news/detail/{id}', function () {
    return view('layout.pages.newsDetail');
});
Route::get('/temp', function () {
    return view('temp');
});


// Route::post('/admin/store/art', function () {
//     return 'ok';
// });


// Route::post('/admin/store/art', [App\Http\Controllers\Layouts\ArtController::class, 'store']);










Route::group(['middleware' => ['auth']], function () {
    // Categories
    Route::get('/admin/view/categories', [App\Http\Controllers\Layouts\CateagoriesController::class, 'view']);
    Route::get('/admin/add/category', [App\Http\Controllers\Layouts\CateagoriesController::class, 'add']);
    Route::post('/admin/store/category', [App\Http\Controllers\Layouts\CateagoriesController::class, 'store']);
    Route::get('/admin/edit/category/{id}', [App\Http\Controllers\Layouts\CateagoriesController::class, 'edit']);
    Route::post('/admin/update/this/category/{id}', [App\Http\Controllers\Layouts\CateagoriesController::class, 'updateCategory']);
    Route::post('/admin/update/category/status', [App\Http\Controllers\Layouts\CateagoriesController::class, 'updateStatus']);
    Route::get('/admin/delete/category/{id}', [App\Http\Controllers\Layouts\CateagoriesController::class, 'deleteCategory']);
    //artists
    Route::get('/admin/view/artists', [App\Http\Controllers\Layouts\ArtistsController::class, 'view']);
    Route::get('/admin/add/artist', [App\Http\Controllers\Layouts\ArtistsController::class, 'add']);
    Route::post('/admin/store/artist', [App\Http\Controllers\Layouts\ArtistsController::class, 'store']);
    Route::get('/admin/edit/artist/{id}', [App\Http\Controllers\Layouts\ArtistsController::class, 'edit']);
    Route::post('/admin/update/this/artist/{id}', [App\Http\Controllers\Layouts\ArtistsController::class, 'updateCategory']);
    Route::post('/admin/update/artist/status', [App\Http\Controllers\Layouts\ArtistsController::class, 'updateStatus']);
    Route::get('/admin/delete/artist/{id}', [App\Http\Controllers\Layouts\ArtistsController::class, 'deleteCategory']);
    //Arts
    Route::get('/admin/view/arts', [App\Http\Controllers\Layouts\ArtController::class, 'view']);
    Route::get('/admin/add/art', [App\Http\Controllers\Layouts\ArtController::class, 'add']);
    Route::post('/admin/store/art', [App\Http\Controllers\Layouts\ArtController::class, 'store']);
    Route::get('/admin/edit/art/{id}', [App\Http\Controllers\Layouts\ArtController::class, 'edit']);
    Route::post('/admin/update/this/art/{id}', [App\Http\Controllers\Layouts\ArtController::class, 'updateCategory']);
    Route::post('/admin/update/art/status', [App\Http\Controllers\Layouts\ArtController::class, 'updateStatus']);
    Route::get('/admin/delete/art/{id}', [App\Http\Controllers\Layouts\ArtController::class, 'deleteCategory']);
    Route::post('/admin/update/featured/art/status', [App\Http\Controllers\Layouts\ArtController::class, 'updateFeatured']);
    //virtual art
    Route::get('/admin/view/virtuals', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'view']);
    Route::get('/admin/add/virtual', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'add']);
    Route::post('/admin/store/virtual', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'store']);
    Route::get('/admin/edit/virtual/{id}', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'edit']);
    Route::post('/admin/update/this/virtual/{id}', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'updateCategory']);
    Route::post('/admin/update/virtual/status', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'updateStatus']);
    Route::get('/admin/delete/virtual/{id}', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'deleteCategory']);
    Route::post('/admin/update/featured/virtual/status', [App\Http\Controllers\Layouts\VirtualExibitioonController::class, 'updateFeatured']);
    //Slide
    Route::get('/admin/view/slides', [App\Http\Controllers\Layouts\SlideController::class, 'view']);
    Route::get('/admin/add/slide', [App\Http\Controllers\Layouts\SlideController::class, 'add']);
    Route::post('/admin/store/slide', [App\Http\Controllers\Layouts\SlideController::class, 'store']);
    Route::get('/admin/edit/slide/{id}', [App\Http\Controllers\Layouts\SlideController::class, 'edit']);
    Route::post('/admin/update/this/slide/{id}', [App\Http\Controllers\Layouts\SlideController::class, 'updateCategory']);
    Route::post('/admin/update/slide/status', [App\Http\Controllers\Layouts\SlideController::class, 'updateStatus']);
    Route::get('/admin/delete/slide/{id}', [App\Http\Controllers\Layouts\SlideController::class, 'deleteCategory']);
    //Art News
    Route::get('/admin/view/news', [App\Http\Controllers\Layouts\ArtNewsController::class, 'view']);
    Route::get('/admin/add/news', [App\Http\Controllers\Layouts\ArtNewsController::class, 'add']);
    Route::post('/admin/store/news', [App\Http\Controllers\Layouts\ArtNewsController::class, 'store']);
    Route::get('/admin/edit/news/{id}', [App\Http\Controllers\Layouts\ArtNewsController::class, 'edit']);
    Route::post('/admin/update/this/news/{id}', [App\Http\Controllers\Layouts\ArtNewsController::class, 'updateCategory']);
    Route::post('/admin/update/news/status', [App\Http\Controllers\Layouts\ArtNewsController::class, 'updateStatus']);
    Route::get('/admin/delete/news/{id}', [App\Http\Controllers\Layouts\ArtNewsController::class, 'deleteCategory']);
    // buyers
    Route::get('/admin/view/buyers', [App\Http\Controllers\Layouts\BuyersController::class, 'view']);
    Route::get('/admin/delete/buyer/{id}', [App\Http\Controllers\Layouts\BuyersController::class, 'deleteCategory']);
});