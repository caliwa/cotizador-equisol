<?php

use App\Livewire\Auth\LoginComponent;
use App\Livewire\Module\Cost\UpdateCost\MediatorUpdateCostComponent;
use App\Livewire\Module\Menu\MediatorMainMenuComponent;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {

    return redirect('/login');
});

Route::get('/login', LoginComponent::class)->name('login');

Route::get('/menu-principal', MediatorMainMenuComponent::class)
    ->name('dashboard');


Route::get('/actualizar-costo', MediatorUpdateCostComponent::class)
    ->name('act-cost');
