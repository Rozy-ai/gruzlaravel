<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\ItemsController;
use App\Http\Controllers\Admin\TrucksController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\DropzoneController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [HomeController::class, 'index'] );
Route::get('/contact', [HomeController::class, 'contact'] );
Route::get('/item', [ItemController::class, 'index'] );
Route::get('/order', [OrderController::class, 'index'] );
Route::get('/order/{role}', [OrderController::class, 'role'] );
Route::get('/item/kadalasdyryjy-namalar', [ItemController::class, 'acts'] );
Route::get('/item/{id}', [ItemController::class, 'show'] )->name('item.show');
// Route::get('/{locale?}', function ($locale = null) {
//     if (isset($locale) && in_array($locale, config('app.available_locales'))) {
//         app()->setLocale($locale);
//     }
//         return App::call('App\Http\Controllers\HomeController@index');
// });
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

//Route::get('/admin', 'Admin/DashboardController@index' );
Route::group(['prefix' => 'admin', 'namescape' => 'Admin'], function (){
Route::get('/', [DashboardController::class, 'index'] );
Route::resource('categories', CategoriesController::class );
Route::resource('items', ItemsController::class );
Route::resource('users', UsersController::class );
Route::resource('trucks', TrucksController::class );
Route::resource('info', InfoController::class );

Route::get('dropzone', [DropzoneController::class, 'index']);

Route::post('dropzone/upload', [DropzoneController::class, 'upload'])->name('dropzone.upload');

Route::get('dropzone/fetch', [DropzoneController::class, 'fetch'])->name('dropzone.fetch');

Route::get('dropzone/delete', [DropzoneController::class, 'delete'])->name('dropzone.delete');

// Route::get('image/upload', [ImageUploadController::class, 'fileCreate'] );
// Route::post('image/upload/store', [ImageUploadController::class, 'fileStore'])->name('dropzone.store');
// Route::post('image/delete', [ImageUploadController::class, 'fileDestroy'] );
});

// Route::controller(UserController::class)->group(function () {
//     Route::get('/', 'create')->name('user.create');
//     Route::post('/', 'store')->name('user.store');
// });

