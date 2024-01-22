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

Route::get('/about', function () {
    return '<h1>about us</h1>';
});

Route::get('/contact', function () {
    return '<h1>contact us</h1>';
});

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if(isset($category)) {

        if(isset($item)) {
            return "You are viewing the story for {$category} - {$item}";
        }
        return "You are viewing the store for " . strip_tags($category);
    }
    return "You are viewing everything";
});

// Route::get('/store', function () {
//     $category = request('category');
//     if(isset($category)) {
//     return 'Looking in the store for ' . strip_tags($category);
//     }
//     return 'Looking in the store';
// });