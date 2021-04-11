<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

Route::get('/contatti' , [PublicController::class, 'contacts'])->name('contatti');

Route::post('/contatti/submit' , [PublicController::class, 'submit'])->name('contatti.submit');

Route::get('/chisiamo' , [PublicController::class , 'chisiamo'])->name('chisiamo');

Route::get('/servizi/dettaglio/{title}', [PublicController::class, 'detail'])->name('servizi.dettaglio');

Route::get('/servizi', [PublicController::class, 'servizi'])->name('servizi');