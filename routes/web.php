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
Route::get('/dashboard', function () {
    return redirect()->route('market.product.index');
});
Route::get('/', function () {
//    return view('home');
    return redirect()->route('market.product.index');
});

Auth::routes();


Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/escrow', 'EscrowController')->name('main.escrow');
    Route::get('/rules', 'RulesController')->name('main.rules');
    Route::get('/privacy-policy', 'PrivacyPolicyController')->name('main.pp');
    Route::get('/terms-of-service', 'TermsOfServiceController')->name('main.tos');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'App\Http\Controllers\Market', 'prefix' => 'market'], function () {
    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function () {
        Route::get('/', 'IndexController')->name('market.product.index');
        Route::get('/{product}', 'ShowController')->name('market.product.show');
        Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
            Route::post('/', 'StoreController')->name('market.product.comment.store');
        });
    });
    Route::group(['namespace' => 'Store', 'prefix' => 'store'], function () {
        Route::get('/', 'IndexAllController')->name('market.stores.index');
        Route::get('/{store}', 'IndexController')->name('market.store.index');
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'category'], function () {
        Route::get('/{category}', 'IndexController')->name('market.category.index');
    });
    Route::group(['namespace' => 'StoreProduct', 'prefix' => 'store-product'], function () {
        Route::get('/{store}', 'IndexController')->name('market.category.storeProduct');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'moderator'], function () {
    Route::group(['namespace' => 'Main', 'prefix' => 'main', 'middleware' => 'admin'], function () {
        Route::get('/edit', 'EditController')->name('admin.main.edit');
        Route::patch('/', 'UpdateController')->name('admin.main.update');
    });
    Route::group(['namespace' => 'Balance', 'prefix' => 'balance'], function () {
        Route::get('/withdrawal', 'WithdrawalController')->name('admin.balance.withdrawal.index');
        Route::get('/{form}/withdrawal', 'WithdrawalShowController')->name('admin.balance.withdrawal.edit');
        Route::patch('/{form}/withdrawal', 'WithdrawalUpdateController')->name('admin.balance.withdrawal.update');
        Route::get('/replenishment', 'ReplenishmentController')->name('admin.balance.replenishment.index');
        Route::get('/{form}/replenishment', 'ReplenishmentShowController')->name('admin.balance.replenishment.edit');
        Route::patch('/{form}/replenishment', 'ReplenishmentUpdateController')->name('admin.balance.replenishment.update');
    });
    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.user.destroy');
    });
    Route::group(['namespace' => 'Store', 'prefix' => 'stores'], function () {
        Route::get('/', 'IndexController')->name('admin.store.index');
        Route::get('/check', 'CheckController')->name('admin.store.check');
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
    Route::group(['namespace' => 'CategoryPost', 'prefix' => 'posts-categories'], function () {
        Route::get('/', 'IndexController')->name('admin.categoryPost.index');
        Route::get('/create', 'CreateController')->name('admin.categoryPost.create');
        Route::post('/', 'StoreController')->name('admin.categoryPost.store');
        Route::get('/{category}', 'ShowController')->name('admin.categoryPost.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.categoryPost.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.categoryPost.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.categoryPost.destroy');
    });
    Route::group(['namespace' => 'Product', 'prefix' => 'products'], function () {
        Route::get('/', 'IndexController')->name('admin.product.index');
        Route::get('/check', 'CheckController')->name('admin.product.check');
        Route::get('/{product}/edit', 'EditController')->name('admin.product.edit');
        Route::patch('/{product}', 'UpdateController')->name('admin.product.update');
        Route::delete('/{product}', 'DestroyController')->name('admin.product.destroy');
    });
    Route::group(['namespace' => 'News', 'prefix' => 'news'], function () {
        Route::get('/', 'IndexController')->name('admin.news.index');
        Route::get('/create', 'CreateController')->name('admin.news.create');
        Route::post('/', 'StoreController')->name('admin.news.store');
        Route::get('/{post}/edit', 'EditController')->name('admin.news.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.news.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.news.destroy');
    });
});
Route::group(['namespace' => 'App\Http\Controllers\Store', 'prefix' => 'store'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/start', 'StartController')->name('store.main.start');
        Route::post('/open', 'OpenController')->name('store.main.open');
        Route::get('/create', 'CreateController')->name('store.main.create');
        Route::post('/', 'StoreController')->name('store.main.store');
        Route::get('/{store}/edit', 'EditController')->name('store.main.edit');
        Route::patch('/{store}', 'UpdateController')->name('store.main.update');
        Route::get('/{store}/main', 'MainController')->name('store.main.main');
        Route::get('/{store}/active', 'ActiveController')->name('store.main.active');
//        Route::delete('/{store}', 'DestroyController')->name('store.main.destroy');
    });
    Route::group(['namespace' => 'Order', 'prefix' => 'orders'], function () {
        Route::get('/', 'IndexController')->name('store.order.index');
        Route::get('/{order}/status', 'EditController')->name('store.order.edit');
        Route::patch('/{order}', 'UpdateController')->name('store.order.update');
    });
    Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
        Route::get('/create', 'CreateController')->name('store.product.create');
        Route::post('/', 'StoreController')->name('store.product.store');
        Route::get('/{product}/edit', 'EditController')->name('store.product.edit');
        Route::patch('/{product}', 'UpdateController')->name('store.product.update');
        Route::get('/{product}/active', 'ActiveController')->name('store.product.active');
        Route::group(['namespace' => 'Image', 'prefix' => 'images'], function () {
            Route::get('/{product}', 'IndexController')->name('store.product.image.index');
            Route::get('/{product}/create', 'CreateController')->name('store.product.image.create');
            Route::post('/', 'StoreController')->name('store.product.image.store');
            Route::delete('/{image}/update', 'DestroyController')->name('store.product.image.destroy');
        });
    });
});

Route::group(['namespace' => 'App\Http\Controllers\Profile', 'prefix' => 'profile'], function () {
    Route::group(['namespace' => 'Balance', 'prefix' => 'balance'], function () {
        Route::get('/', 'IndexController')->name('profile.balance.index');
        Route::get('/{user}/replenishment', 'ReplenishmentController')->name('profile.balance.replenishment');
        Route::get('/{user}/withdrawal', 'WithdrawalController')->name('profile.balance.withdrawal');
        Route::post('/replenishment', 'ReplenishmentStoreController')->name('profile.balance.replenishmentStore');
        Route::post('/withdrawal', 'WithdrawalStoreController')->name('profile.balance.withdrawalStore');
    });
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/{user}/show', 'ShowController')->name('profile.main.show');
        Route::get('/edit', 'EditController')->name('profile.main.edit');
        Route::patch('/update', 'UpdateController')->name('profile.main.update');
    });
    Route::group(['namespace' => 'Chat', 'prefix' => 'chats'], function () {
        Route::get('/', 'IndexController')->name('profile.chat.index');
        Route::get('/{user}/show', 'ShowController')->name('profile.chat.show');
        Route::group(['namespace' => 'Message', 'prefix' => 'messages'], function () {
            Route::post('/{user}', 'StoreController')->name('profile.chat.message.store');
        });
    });
});


Route::group(['namespace' => 'App\Http\Controllers\Order', 'prefix' => 'orders'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('order.main.index');
        Route::get('/{product}/create', 'CreateController')->name('order.main.create');
        Route::get('/{order}/show', 'EditController')->name('order.main.edit');
        Route::patch('/{order}', 'UpdateController')->name('order.main.update');
        Route::post('/', 'StoreController')->name('order.main.store');
    });
});

Route::group(['namespace' => 'App\Http\Controllers\News', 'prefix' => 'news'], function () {
    Route::get('/', 'IndexController')->name('news.main.index');
    Route::get('/{category}/category', 'CategoryController')->name('news.main.category');
    Route::get('/{post}/', 'ShowController')->name('news.main.show');
    Route::group(['namespace' => 'Comment', 'prefix' => 'comment'], function () {
        Route::post('/', 'StoreController')->name('news.comment.store');
    });
});
