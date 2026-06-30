<?php

use App\Livewire\ProductMain;
use App\Livewire\CategoryMain;
use App\Livewire\TutorialMain;
use App\Livewire\AdminMain;
use App\Livewire\CatalogoMain;
use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\Security;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::livewire('settings/profile', Profile::class)->name('profile.edit');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::livewire('settings/appearance', Appearance::class)->name('appearance.edit');

    Route::livewire('settings/security', Security::class)
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('security.edit');
    Route::get('/productos', ProductMain::class)->name('productos');
    Route::get('/categorias', CategoryMain::class)->name('categorias');
    Route::get('/tutoriales', TutorialMain::class)->name('tutoriales');
    Route::get('/administradores', AdminMain::class)->name('administradores');
    Route::get('/catalogos', CatalogoMain::class)->name('catalogos');
});
