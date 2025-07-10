<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServerStatsController;

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

Route::post('/server-stats', [ServerStatsController::class, 'store']);

Route::get('/server-stats-view', function (\Illuminate\Http\Request $request) {
    $ip = $request->query('ip');
    return response()->json(cache()->get('server_stats_' . $ip, []));
});
