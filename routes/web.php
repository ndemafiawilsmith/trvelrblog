<?php


use App\Livewire\Pages\Home;
use App\Livewire\TourMarketplace;
use App\Livewire\SearchResult;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


// Using Controllers
// Route::get('/', [HomeController::class, 'index'])->name('home');

// Using Livewire
Route::get('/', Home::class)->name('home');

Route::get('/tour-marketplace', TourMarketplace::class)->name('tour-marketplace');
use App\Http\Controllers\SearchController;

// Handle the search request
Route::get('/search', SearchResult::class)->name('search');


