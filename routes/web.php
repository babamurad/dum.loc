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
Route::get('single-news/{id}', \App\Livewire\SingleNewsComponent::class)->name('single.news');
Route::get('cart', \App\Livewire\KartockaComponent::class)->name('cart');

Route::get('admin/dashboard', \App\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');
Route::get('admin/news', \App\Livewire\Admin\AdminNewsComponent::class)->name('admin.news');
Route::get('admin/create-news', \App\Livewire\Admin\CreateNewsComponent::class)->name('admin.news.create');
Route::get('admin/news/edit/{id}', \App\Livewire\Admin\EditNewsComponent::class)->name('admin.news.edit');

Route::get('admin/partners', App\Livewire\Admin\Partners\IndexComponent::class)->name('admin.partners.index');
Route::get('admin/partners/create', \App\Livewire\Admin\Partners\Create::class)->name('admin.partners.create');
Route::get('admin/partners/edit/{id}', \App\Livewire\Admin\Partners\Edit::class)->name('admin.partners.edit');

Route::get('admin/questions', \App\Livewire\Admin\Questions\QuestionsIndexComponent::class)->name('admin.questions.index');
Route::get('admin/questions/create', \App\Livewire\Admin\Questions\QuestionsCreateComponent::class)->name('admin.questions.create');
Route::get('admin/questions/edit/{id}', \App\Livewire\Admin\Questions\QuestionsEditComponent::class)->name('admin.questions.edit');

Route::get('admin/awards', App\Livewire\Admin\Awards\AwardsIndex::class)->name('admin.awards.index');
Route::get('admin/awards/create', App\Livewire\Admin\Awards\AwardsCreate::class)->name('admin.awards.create');
Route::get('admin/awards/edit/{id}', \App\Livewire\Admin\Awards\AwardsEdit::class)->name('admin.awards.edit');

Route::get('admin/contacts', \App\Livewire\Admin\ContactComponent::class)->name('admin.contacts');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
