<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PackageController;


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
Route::get('/', function(){
    return 200;
});
Route::get('/package', [PackageController::class, 'getPackages']);
Route::get('/package/{id}', [PackageController::class, 'getPackagesById']);
Route::post('/package', [PackageController::class, 'createPackage'])->withoutMiddleware(['csrf']);
Route::get('/generate-csrf', [PackageController::class, 'generateCSRF']);
Route::delete('/package/{id}', [PackageController::class, 'deletePackageById']);
Route::put('/package/{id}', [PackageController::class, 'updatePackageById']);
Route::patch('/package/{id}', [PackageController::class, 'updateSomeFieldPackageById']);