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

Route::redirect('/', '/login');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/posts', function () {
        return view('posts');
    })->name('posts');

    Route::get('/view-post/{post}', function () {
        return view('view-post');
    })->name('view-post');

    Route::get('/create-post', function () {
        return view('create-post');
    })->name('create-post');

    Route::get('/{post}/edit-post', function () {
        return view('edit-post');
    })->name('edit-post');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),   
//     'verified',
// ])->group(function () {
//     Route::get('/create-post', function () {
//         return view('create-post');
//     })->name('create-post');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),   
//     'verified',
// ])->group(function () {
//     Route::get('/view-post/{post}', function () {
//         return view('view-post');
//     })->name('view-post');
// });