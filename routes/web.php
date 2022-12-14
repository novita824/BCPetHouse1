<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroomingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenitipanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/sesi', [SessionController::class, 'index']);
Route::post('/sesi/login', [SessionController::class, 'login']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    echo "Anda Berhasil Login";
})->name('welcome');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('Grooming', GroomingController::class);
Route::resource('Penitipan', PenitipanController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('product', [])
