<?php

use App\Http\Controllers\DiamondController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\Diamond;
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

Route::get('/', [HomeController::class, 'index'])->name('home.pages.diamond.index');




Route::get('/login', [HomeController::class, 'login'])->name('home.pages.login');


Route::get('/dashboard', function () {
    $data = Diamond::latest()->get();
    return view('admin.pages.diamond.index', compact('data'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //diamond
    Route::get('/admin/diamond', [DiamondController::class, 'index'])->name('admin.pages.diamond.index');
    Route::get('/admin/diamond/create', [DiamondController::class, 'create'])->name('admin.pages.diamond.create');
    Route::post('/admin/diamond/store', [DiamondController::class, 'store'])->name('admin.pages.diamond.store');
    Route::delete('/admin/diamond/delete/{id}', [DiamondController::class, 'destroy'])->name('admin.pages.diamond.destroy');


    Route::get('/sair', [HomeController::class, 'destroy'])->name('sair');
});

require __DIR__ . '/auth.php';
