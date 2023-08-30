<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Market', 'prefix' => 'market'], function () {
    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function () {
        Route::get('/', 'IndexController')->name('market.product.index');
        Route::get('/{product}', 'ShowController')->name('market.product.show');
//        Route::get('/{product}/edit', 'EditController')->name('market.product.edit');
//        Route::patch('/{product}', 'UpdateController')->name('market.product.update');
//        Route::delete('/{product}', 'DestroyController')->name('market.product.destroy');
        Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
            Route::post('/', 'StoreController')->name('market.product.comment.store');
        });
    });
});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'Store', 'prefix' => 'stores'], function () {
        Route::get('/', 'IndexController')->name('admin.store.index');
        Route::get('/{store}/edit', 'EditController')->name('admin.store.edit');
        Route::patch('/{store}', 'UpdateController')->name('admin.store.update');
        Route::delete('/{store}', 'DestroyController')->name('admin.store.destroy');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'products-categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.destroy');
    });
    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function () {
        Route::get('/', 'IndexController')->name('admin.product.index');
        Route::get('/{product}/edit', 'EditController')->name('admin.product.edit');
        Route::patch('/{product}', 'UpdateController')->name('admin.product.update');
        Route::delete('/{product}', 'DestroyController')->name('admin.product.destroy');
    });

});
Route::group(['namespace' => 'App\Http\Controllers\Store', 'prefix' => 'store'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/start', 'StartController')->name('store.main.create');
        Route::post('/', 'OpenController')->name('store.main.open');
        Route::get('/create', 'CreateController')->name('store.main.create');
        Route::post('/', 'StoreController')->name('store.main.store');
        Route::get('/{store}/edit', 'EditController')->name('store.main.edit');
//        Route::patch('/{store}', 'UpdateController')->name('store.main.update');
//        Route::delete('/{store}', 'DestroyController')->name('store.main.destroy');
    });
});


