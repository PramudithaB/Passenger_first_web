<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
route::get('admindashboard',[HomeController::class,'admindashboard'])->middleware(['auth','admin'])->name('admindashboard');
route::get('welcome',[HomeController::class,'welcome'])->name('welcome');
route::get('create87route',[RouteController::class,'create87route'])->name('create87route');
route::post('store87route',[RouteController::class,'store87route'])->name('store87route');
Route::delete('/route87/delete/{id}', [RouteController::class, 'delete87'])->name('route87.delete');

Route::get('/', [HomeController::class, 'welcome']);
Route::get('/search', [HomeController::class, 'searchBus'])->name('search.bus');
Route::get('/search_results', [HomeController::class, 'search_results'])->name('search_results');

