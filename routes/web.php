<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ClientMain;
use App\Livewire\HomePage;

Route::get('/', HomePage::class)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('/clients', ClientMain::class)->name('clients');
});

require __DIR__.'/settings.php';
