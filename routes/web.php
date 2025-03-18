<?php

use App\Livewire\Blog\ByCategory;
use App\Livewire\Front\BlogDetail;
use App\Livewire\Front\Index;
use App\Livewire\Marketplace;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



Route::view('/', 'pages.home')->name('home');
Route::view('/marketplace', 'pages.marketplace')->name('marketplace');
// Route::view('/about', 'pages.about')->name('about');
// Route::view('/contact', 'pages.contact')->name('contact');
