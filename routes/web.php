<?php

use Illuminate\Support\Facades\Route;

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



Route::group(['namespace' => 'Front'], function () {

    Route::get('/', 'IndexController')->name('fronts.index');




    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {
        Route::get('/{post}', 'ShowController')->name('fronts.posts.show');


        Route::group(['namespace' => 'Comment', 'prefix' => '{post}/comments'], function () {
            Route::post('/', 'StoreController')->name('post.comments.store');
        });


        Route::group(['namespace' => 'Like', 'prefix' => '{post}/likes'], function () {
            Route::post('/', 'StoreController')->name('post.likes.store');
        });
    });
});









Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {

    Route::get('/', 'IndexController')->name('categories.index');


    Route::group(['namespace' => 'Post', 'prefix' => '{category}/posts'], function () {
        Route::get('/', 'IndexController')->name('categories.posts.index');
    });
});







Route::group(['namespace' => "Personal", 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function () {


    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');

    });


    Route::group(['namespace' => 'Like', 'prefix' => 'likes'], function () {
        Route::get('/', 'IndexController')->name('personal.likes.index');
        Route::delete('/{post}', 'DestroyController')->name('personal.likes.delete');
    });

    Route::group(['namespace' => 'Comment', 'prefix' => 'comments'], function () {
        Route::get('/', 'IndexController')->name('personal.comments.index');
        Route::get('/{comment}/edit', 'EditController')->name('personal.comments.edit');
        Route::patch('/{comment}', 'UpdateController')->name('personal.comments.update');
        Route::delete('/{comment}', 'DestroyController')->name('personal.comments.delete');
    });

});


Route::group(['namespace' => "Admin", 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function () {



    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {

        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}', 'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DestroyController')->name('admin.category.delete');

    });


    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {

        Route::get('/', 'IndexController')->name('admin.tags.index');
        Route::get('/create', 'CreateController')->name('admin.tags.create');
        Route::post('/', 'StoreController')->name('admin.tags.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tags.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tags.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tags.update');
        Route::delete('/{tag}', 'DestroyController')->name('admin.tags.delete');

    });


    Route::group(['namespace' => 'Post', 'prefix' => 'posts'], function () {

        Route::get('/', 'IndexController')->name('admin.posts.index');
        Route::get('/create', 'CreateController')->name('admin.posts.create');
        Route::post('/', 'StoreController')->name('admin.posts.store');
        Route::get('/{post}', 'ShowController')->name('admin.posts.show');
        Route::get('/{post}/edit', 'EditController')->name('admin.posts.edit');
        Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
        Route::delete('/{post}', 'DestroyController')->name('admin.posts.delete');

    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {

        Route::get('/', 'IndexController')->name('admin.users.index');
        Route::get('/create', 'CreateController')->name('admin.users.create');
        Route::post('/', 'StoreController')->name('admin.users.store');
        Route::get('/{user}', 'ShowController')->name('admin.users.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.users.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
        Route::delete('/{user}', 'DestroyController')->name('admin.users.delete');

    });
});





Auth::routes(['verify' => true]);

