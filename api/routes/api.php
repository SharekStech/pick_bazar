<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


require base_path('packages/marvel/src/Rest/Routes.php');

use Marvel\Http\Controllers\OfficeController;
// Route::apiResource('offices', OfficeController::class);


Route::get('/debug-test', function() {
    return response()->json([
        'status' => 'success',
        'message' => 'Main API Routes Working!',
        'marvel_package' => 'Loaded',
        'timestamp' => now()->toDateTimeString()
    ]);
});
