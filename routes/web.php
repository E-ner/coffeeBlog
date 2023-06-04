<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\SiteCotroller;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ProductController;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

// Routers that helps to route from one page to another in the system

Route::controller(SiteCotroller::class)->group(function(){
    Route::get('/','home')->name('index');    
    Route::get('/menu','menu')->name('home.menu');    
    Route::get('/about','about')->name('about');    
    Route::get('/services','services')->name('services');    
    Route::get('/contact','contact')->name('contact');    
    Route::get('/testimonial','testimony')->name('clients');    
    Route::post('/comments','comment')->name('comments');    
    Route::get('/getcomments','getcomments')->name('comment');    

});



// Admin dashboard routers
Route::group(['prefix' => 'admin'],function(){
Route::controller(AdminController::class)->group(function(){
    Route::get('/dashboard','dashboard')->name('dashboard');    

    Route::controller(PostController::class)->group(function(){
        Route::get('/post','posts')->name('posts');    
        Route::get('/create','create')->name('create');   
        Route::post('/post','store')->name('store');   
        Route::get('/delete{id}','delete')->name('delete');   
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update{id}','update')->name('update');


    });


    Route::controller(ProductController::class)->group(function(){
        Route::get('/pproducts','products')->name('pproducts');    
        Route::get('/pcreate','createProducts')->name('product.create');   
        Route::post('/ppost','storeProducts')->name('product.store');   
        Route::get('/pdelete{id}','deleteProducts')->name('product.delete');   
        Route::get('/pedit/{id}','editProducts')->name('product.edit');
        Route::post('/pupdate{id}','updateProducts')->name('product.update');


    });
});
});

