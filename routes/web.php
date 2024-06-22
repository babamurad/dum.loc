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

Route::get('/', \App\Livewire\HomeComponent::class)->name('home');
Route::get('single-news', \App\Livewire\SingleNewsComponent::class)->name('single.news');

Route::get('admin/dashboard', \App\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');
Route::get('admin/news', \App\Livewire\Admin\AdminNewsComponent::class)->name('admin.news');
Route::get('admin/create-news', \App\Livewire\Admin\CreateNewsComponent::class)->name('admin.news.create');
Route::get('admin/news/edit/{id}', \App\Livewire\Admin\EditNewsComponent::class)->name('admin.news.edit');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
