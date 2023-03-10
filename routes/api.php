<?php

use App\Http\Controllers\Apartments\ApartmaentController;
use App\Http\Controllers\API\Auth\Login;
use App\Http\Controllers\API\Auth\Logout;
use App\Http\Controllers\API\Auth\Register;
use App\Http\Controllers\API\Auth\reset;
use App\Http\Controllers\Api\Products\Products;
use App\Http\Controllers\API\User\UpdateUserInfo;
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


// producted routes by api sunctum ...
Route::group(['middleware'=>['auth:sanctum']],function () {


    Route::post('updateUser', [UpdateUserInfo::class,'updateUser']);
    Route::post('checkPassword', [UpdateUserInfo::class,'checkpassword']);
    Route::post('changePassword', [UpdateUserInfo::class,'changePassword']);
    Route::post('changePhone', [UpdateUserInfo::class,'changePhone']);
    // -------------------------------------------------------



    // -------------------------------------------------------
    Route::delete('logout', [Logout::class,'logout']);


});

// -----------------------------------------------------


Route::post('register',[Register::class,'register']);
Route::post('login',[Login::class,'login']);
Route::post('resetViaEmail',[reset::class,'sendingEmail']);
Route::post('checkOTP',[reset::class,'checkOPT']);
Route::post('newPassword',[reset::class,'newPassword']);






// -------------------------------------------------------
Route::get('/',function (){
    return view('welldone');
});

// -------------------------------------------------------


// Route::resource('product', Products::class);
// Route::get('product/search/{name}', [Products::class,'search']);
