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



Route::group(['namespace' => 'Main'], function () {

    Route::get('/', 'IndexController');

});

Route::group(['namespace' => "Admin", 'prefix' => 'admin'], function () {



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
//        Route::get('/{post}/edit', 'EditController')->name('admin.posts.edit');
//        Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
//        Route::delete('/{post}', 'DestroyController')->name('admin.posts.delete');

    });
});





Auth::routes();

