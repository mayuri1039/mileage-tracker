<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MileageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('mileage/form', [MileageController::class, 'showForm']);
Route::post('mileage/km-log', [MileageController::class, 'storeKmLog'])->name('store.kmlog');
Route::post('mileage/bike-service', [MileageController::class, 'storeBikeService'])->name('store.bikeservice');
Route::post('mileage/petrol-refuel', [MileageController::class, 'storePetrolRefuel'])->name('store.petrolrefuel');
Route::get('mileage/graph', [MileageController::class, 'showMileageGraph']);

