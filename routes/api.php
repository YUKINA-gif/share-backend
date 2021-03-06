<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShareController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;

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

Route::apiResource("/shares",ShareController::class);
Route::post("/register",[RegisterController::class,"post"]);
Route::post("/login",[LoginController::class,"post"]);
Route::post("/logout",[LogoutController::class,"post"]);
Route::get("/user",[UsersController::class,"get"]);
Route::put("/user", [UsersController::class, "put"]);
Route::post("/like",[ShareController::class,"post"]);
Route::delete("/like", [ShareController::class, "delete"]);
Route::post("/comment", [ShareController::class, "post"]);