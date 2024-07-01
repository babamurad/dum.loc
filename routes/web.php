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

Route::get('login', \App\Livewire\User\UserRegisterComponent::class)->name('login');
Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::get('/', \App\Livewire\HomeComponent::class)->name('home');
Route::get('single-news/{id}', \App\Livewire\SingleNewsComponent::class)->name('single.news');
Route::get('cart', \App\Livewire\KartockaComponent::class)->name('cart');



Route::middleware(['auth'])->prefix('admin')->group(function (){
    Route::get('dashboard', \App\Livewire\Admin\DashboardComponent::class)->name('admin.dashboard');
    Route::get('news', \App\Livewire\Admin\AdminNewsComponent::class)->name('admin.news');
    Route::get('create-news', \App\Livewire\Admin\CreateNewsComponent::class)->name('admin.news.create');
    Route::get('news/edit/{id}', \App\Livewire\Admin\EditNewsComponent::class)->name('admin.news.edit');

    Route::get('partners', App\Livewire\Admin\Partners\IndexComponent::class)->name('admin.partners.index');
    Route::get('partners/create', \App\Livewire\Admin\Partners\Create::class)->name('admin.partners.create');
    Route::get('partners/edit/{id}', \App\Livewire\Admin\Partners\Edit::class)->name('admin.partners.edit');

    Route::get('questions', \App\Livewire\Admin\Questions\QuestionsIndexComponent::class)->name('admin.questions.index');
    Route::get('questions/create', \App\Livewire\Admin\Questions\QuestionsCreateComponent::class)->name('admin.questions.create');
    Route::get('questions/edit/{id}', \App\Livewire\Admin\Questions\QuestionsEditComponent::class)->name('admin.questions.edit');

    Route::get('awards', App\Livewire\Admin\Awards\AwardsIndex::class)->name('admin.awards.index');
    Route::get('awards/create', App\Livewire\Admin\Awards\AwardsCreate::class)->name('admin.awards.create');
    Route::get('awards/edit/{id}', \App\Livewire\Admin\Awards\AwardsEdit::class)->name('admin.awards.edit');

    Route::get('contacts', \App\Livewire\Admin\ContactComponent::class)->name('admin.contacts');
    Route::get('info', \App\Livewire\Admin\AdminKartocka::class)->name('admin.info');

    Route::get('users', \App\Livewire\Admin\Users\UserIndexComponent::class)->name('admin.users.index');
    Route::get('users/create', \App\Livewire\Admin\Users\UserCreateComponent::class)->name('admin.users.create');
    Route::get('users/edit/{id}', \App\Livewire\Admin\Users\UserEditComponent::class)->name('admin.users.edit');

    Route::get('files', \App\Livewire\Admin\Files\FilesComponent::class)->name('admin.files');
    Route::get('files/create', \App\Livewire\Admin\Files\FilesCreateComponent::class)->name('admin.files.create');
    Route::get('files/edit/{id}', \App\Livewire\Admin\Files\FilesEditComponent::class)->name('admin.files.edit');

    Route::get('contract', \App\Livewire\Admin\Contract\ContractComponent::class)->name('admin.contract');
    Route::get('contract/create', \App\Livewire\Admin\Contract\CreateContract::class)->name('admin.contract.create');
    Route::get('contract/edit/{id}', \App\Livewire\Admin\Contract\EditContract::class)->name('admin.contract.edit');

});


//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('admin.dashboard');
//
//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');
//
//require __DIR__.'/auth.php';
