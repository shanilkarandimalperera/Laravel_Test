<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ZoneRegistration;
use App\Http\Livewire\RegionRegistration;
use App\Http\Livewire\TerritoryRegistraion;
use App\Http\Livewire\UserRegistration;
use App\Http\Livewire\SKURegister;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',ZoneRegistration::class);
Route::get('/region',RegionRegistration::class);
Route::get('/territory',TerritoryRegistraion::class);
Route::get('/user',UserRegistration::class);
Route::get('/sku',SKURegister::class);