<?php


use App\Livewire\Landing;
use App\Livewire\TourMarketplace;
use App\Livewire\SearchResult;

use Illuminate\Support\Facades\Route;


Route::get('/', Landing::class)->name('landing');
Route::get('/tour-marketplace', TourMarketplace::class)->name('tour-marketplace');
use App\Http\Controllers\SearchController;

// Handle the search request
Route::get('/search', SearchResult::class)->name('search');


