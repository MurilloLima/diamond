<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Home\DiamondController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('/contatos', [HomeController::class, 'contatos'])->name('home.pages.contato.index');
//como funciona
Route::get('/funciona', [HomeController::class, 'func'])->name('home.pages.func.index');

//diamond
Route::get('/diamond', [DiamondController::class, 'index'])->name('home.pages.diamond.index');
Route::get('/diamond/view/{slug}', [HomeController::class, 'view'])->name('home.pages.diamond.view');
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
    Route::get('/admin/diamond', [DiamondController::class, 'index'])->name('admin.diamond.index');
    Route::delete('/admin/diamond', [DiamondController::class, 'destroy'])->name('admin.diamond.destroy');
});

require __DIR__ . '/auth.php';
