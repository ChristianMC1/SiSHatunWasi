<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ClienteMain;

Route::view('/', 'welcome')->name('home');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';

Route::get('/clientes', ClienteMain::class)->name('clientes');
