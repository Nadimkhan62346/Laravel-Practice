<?php

// use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//      return view('welcome');
// })->name('home');

// Route::get('test', function () {
//      return view('about');
// })->name('about_us');

// Route::get('posts', function () {
//      return view('post');
// })->name('mypost');

// Route::redirect('abouts','test',301);

Route::prefix('page')->group(function(){
     Route::get('/about',function () {
          return "<h1>About Page</h1>";
       });

     Route::get('/gallery',function () {
          return "<h1>Gallery Page</h1>";
       });

     Route::get('/post/firstpost',function () {
          return "<h1>First Post Page</h1>";
       });

});