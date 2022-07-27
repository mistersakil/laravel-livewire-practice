<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Frontend\HomePage;
use App\Http\Livewire\Backend\Dashboard\Dashboard;
use App\Http\Livewire\Backend\Users\Users;
use App\Http\Livewire\Backend\Posts\Posts;

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

Route::get('/', HomePage::class);

## Backend routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/users', Users::class)->name('users');
    Route::get('/posts', Posts::class)->name('posts');
});
