<?php

use App\Http\Livewire\Front\Page\Index;
use App\Http\Livewire\User\Tiket\Index as TiketIndex;
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

Route::get('/', Index::class);

Route::get('/tiket', TiketIndex::class)->name('tiket');

Auth::routes();
