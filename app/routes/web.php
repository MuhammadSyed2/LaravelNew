<?php

use App\Http\Controllers\GuitarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('homeIndex');
Route::get('/about', [HomeController::class, 'about'])->name('homeAbout');
Route::get('/contact', [HomeController::class, 'contact'])->name('homeContact');

Route::resource('guitars', GuitarsController::class);

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