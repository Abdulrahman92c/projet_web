<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Auth\AuthenticatedSessionController;
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
    return view('index');
});
Route::get('/liste', function () {
    return view('liste');
});
Route::get('/connecte', function () {
    return view('connecte');
});
Route::get('/logout', function () {
    return view('/');
})->name('logout');

Route::post('/', function () {
    return view('connecte');
});

Route::post('/connecte', function () {
    return view('connecte');
});

Route::post('/',[\App\Http\Controllers\connexionController::class,'connect']);

Route::get('/modification', function () {
    return view('modification');
});
Route::post('/modification', function () {
    return view('index');
});

Route::get('/deco',function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('login', 'AuthenticatedSessionController@showLoginForm')->name('login');
Route::post('login', 'AuthenticatedSessionController@login');
Route::post('logout', 'AuthenticatedSessionController@logout')->name('logout');

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

