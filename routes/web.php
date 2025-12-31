<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyListController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController; 

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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/about',[AboutController::class,'about'])->name('about');

Route::get('/listproperty',[PropertyListController::class,'listproperty'])->name('listproperty');


Route::get('/welcome', function () {
    return view('welcome');
}); 

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/listingProperties', [AdminDashboardController::class, 'listingProperty'])->name('admin.list-property');
    Route::get('/property/add', [AdminDashboardController::class, 'createProperty'])->name('admin.property-add');
    Route::post('/property/add', [AdminDashboardController::class, 'storeProperty'])->name('admin.property.store');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

require __DIR__.'/auth.php';

// Removed Auth::routes() because routes are defined in routes/auth.php
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
