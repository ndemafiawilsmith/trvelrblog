<?php

use App\Livewire\Blog\ByCategory;
use App\Livewire\Front\BlogDetail;
use App\Livewire\Front\Index;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', Index::class)->name('Home');
Route::get('/article/{id?}', BlogDetail::class)->name('blog.detail');
Route::get('/category/{slug}', ByCategory::class)->name('byCategory');
