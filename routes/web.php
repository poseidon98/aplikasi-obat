<?php

use App\Http\Livewire\Supplier\ListSupplier;
use App\Http\Livewire\Medicine\ListMedicine;
use App\Http\Livewire\Medicine\ListPayment;
use App\Http\Livewire\Medicine\ListUnit;
use App\Http\Livewire\Medicine\ListType;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/medicine', function () {
    return view('index_obat');
});

Route::get('/payment', function () {
    return view('index_transaksi');
});

Route::get('/unit', function () {
    return view('index_satuan_obat');
});

Route::get('/type', function () {
    return view('index_jenis_obat');
});

// Route::get('/edit', function () {
//     return view('livewire/supplier.edit-supplier');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/edit/{id}', [ListSupplier::class, 'edit']);
Route::post('/edit/{id}/proses', [ListSupplier::class, 'update']);

Route::get('/medicine/edit/{id}', [ListMedicine::class, 'edit']);
Route::post('/medicine/edit/{id}/proses', [ListMedicine::class, 'update']);

Route::get('/type/edit/{id}', [ListMedicine::class, 'edit']);
Route::post('/type/edit/{id}/proses', [ListMedicine::class, 'update']);
require __DIR__ . '/auth.php';
