<?php

use App\Http\Controllers\api\v1\CigrattesController;

/*
|--------------------------------------------------------------------------
| API v1 Routes
|--------------------------------------------------------------------------
|
| This file contains all of the v1 routes.
| This file is loaded and the routes are pre-pended automatically
| by App\Providers\RouteServiceProvider->boot()
|
*/

// Authenticated API (sanctum)
Route::group([
    'middleware' => ['api_authenticated']
], function() {

    Route::get('/example-authenticated', [CigrattesController::class, 'authenticated']);
});

// Public API
Route::group([
    'middleware' => ['api_public'],
], function () {
    Route::get('/cigrattes/{id?}', [CigrattesController::class, 'index']);
});

Route::group([
  'middleware' => ['api_public'],
], function () {
  Route::get('/cigratte-types', [CigrattesController::class, 'cigratteType']);
});
