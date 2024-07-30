<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\EditorPanel\EditorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublisherPanel\PublisherController;
use App\Http\Controllers\SocialPublisherPanel\SocialPublisherController;
use App\Http\Controllers\SuperadminController;
use App\Http\Controllers\UserPanel\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Publisher;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Dashboard Routes,Auth and Middlewares
|--------------------------------------------------------------------------
|
|
*/

//Super Admin and Admin Routes
// Route::middleware('auth', 'role:super admin')->group(function () {
//     Route::get('superadmin/dashboard', [SuperadminController::class, 'index'])->name('superadmin.dashboard');
//     });

//Admin
Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });

//Publisher Routes
Route::middleware('auth','role:publisher')->group(function () {
    Route::get('publisher/dashboard', [PublisherController::class, 'index'])->name('publisher.dashboard');
    //Add Publisher Details
    Route::get('publisher/create-publisher', [PublisherController::class, 'create'])->name('publisher.create');
    //Store Publishe Details
    Route::post('publisher/add-publisher', [PublisherController::class, 'store'])->name('publisher.store');
    //Show Publishe Details
    // Route::get('/publisher/edit/id', [PublisherController::class, 'edit'])->name('publisher.edit');
    // Route to edit publisher details
    Route::get('publisher/edit/{id}', [PublisherController::class, 'edit'])->name('publisher.edit');
    //Edit Publishe Details
   // Route::get('publisher/{id}/edit', [PublisherController::class, 'edit'])->name('publisher.edit');
    //Store Publisher Updated Details
    Route::put('publisher/edit/{id}', [PublisherController::class, 'update'])->name('publisher.edit');
    //Store Publishe Details
    Route::delete('/publisher/{id}', [PublisherController::class, 'destroy'])->name('publisher.destroy');

    });



//Social Publisher
Route::middleware('auth','role:socialpublisher')->group(function () {
    Route::get('socialpublisher/dashboard', [SocialPublisherController::class, 'index'])->name('socialpublisher.dashboard');
    //Create Social Publisher details
    Route::get('socialpublisher/create-publisher', [PublisherController::class, 'create'])->name('socialpublisher.create');
    //Store Social Publisher Details
    Route::post('socialpublisher/add-publisher', [PublisherController::class, 'store'])->name('socialpublisher.store');
    //Show Social Publisher Details
    Route::get('socialpublisher/{id}', [PublisherController::class, 'show'])->name('socialpublisher.show');
    //Edit Social Publisher Details
    Route::get('socialpublisher/{id}/edit', [PublisherController::class, 'edit'])->name('socialpublisher.edit');
    //Store Social Publisher Details
    Route::put('socialpublisher/{id}}', [PublisherController::class, 'update'])->name('socialpublisher.update');
    //Store Social Publisher Details
    Route::delete('socialpublisher/{id}}', [PublisherController::class, 'destroy'])->name('socialpublisher.destroy');

});


//Editor Routes
Route::middleware('auth','role:editor')->group(function () {
    Route::get('editor/dashboard', [EditorController::class, 'index'])->name('editor.dashboard');
    });

// User Routes
Route::middleware('auth','role:user')->group(function () {
     Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
        });


// Optionally, define a route for 404 errors if you need specific handling
Route::get('/404', function () {
    return response()->view('errors.404', [], 404);
});

// Optionally, define a route for 500 errors if you need specific handling
Route::get('/500', function () {
    return response()->view('errors.500', [], 500);
});
