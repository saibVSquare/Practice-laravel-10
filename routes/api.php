<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Enums\Category;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::fallback(function () {
    Route::get('/404', function () {
        return '404 Page';
    });
});



Route::namespace('api')
    ->group(function () {
        Route::prefix('post')->group(function () {
            Route::get('index', [PostController::class, 'index'])->name('index');
            Route::post('store', [PostController::class, 'store']);
            Route::get('show/{post:slug}', [PostController::class, 'show']);
            Route::post('update', [PostController::class, 'update']);
            Route::get('destroy', [PostController::class, 'destroy']);
        });

        Route::get('/categories/{category}', function (Category $category) {
            return $category->value;
        });
    });