<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Admin\DiamondController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('/contatos', [HomeController::class, 'contatos'])->name('home.pages.contato.index');
//como funciona
Route::get('/funciona', [HomeController::class, 'func'])->name('home.pages.func.index');

//login
Route::get('/home/login', [HomeController::class, 'login'])->name('home.pages.login.index');


Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //categoria
    Route::get('/admin/categoria', [CategoriaController::class, 'index'])->name('admin.categoria.index');
    Route::post('/admin/categoria/store', [CategoriaController::class, 'store'])->name('admin.categoria.store');
    Route::delete('/admin/categoria', [CategoriaController::class, 'destroy'])->name('admin.categoria.destroy');

    //diamond
    Route::get('/diamond', [DiamondController::class, 'index'])->name('admin.pages.diamond.index');
    Route::post('/diamond/store', [DiamondController::class, 'store'])->name('admin.pages.diamond.store');
    Route::get('/diamond/view/{slug}', [DiamondController::class, 'view'])->name('admin.pages.diamond.view');
});

require __DIR__ . '/auth.php';
