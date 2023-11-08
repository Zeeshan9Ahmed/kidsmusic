<?php

use App\Models\Notification;
use App\Models\User;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::group(['namespace' => 'App\Http\Controllers\Api\User\Auth'],function(){
    Route::post('user/signup','RegisterController@createUser');
    Route::post('user/verification','VerificationController@verifyUser');
    Route::post('user/resend-otp','VerificationController@resendVerificationCode');
    Route::post('user/login','LoginController@login');
    Route::post('user/social-login','LoginController@socialLogin');
    Route::post('user/forgot-password', 'ResetPasswordController@forgotPassword');
    Route::post('user/forgot-password-otp-verify', 'ResetPasswordController@forgotPasswordOtpVerify');
    Route::post('user/reset-forgot-password', 'ResetPasswordController@resetForgotPassword');

    Route::group(['middleware'=>'auth:sanctum'],function(){
        Route::post('user/change-password', 'ResetPasswordController@changepassword');
        Route::post('user/update-profile', 'RegisterController@completeProfile');
        Route::post('user/logout','LoginController@logout');
        Route::get('notifications', 'LoginController@notifications');
        Route::get('user/delete-account','LoginController@deleteAccount');
    });
});
Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::group(['namespace' => 'App\Http\Controllers\Api\User\Level'],function(){
        // Route::get('all-levels','LevelController@index');
        Route::get('generes','LevelController@allGeneres');
        Route::get('genere-level','LevelController@genereLevel');
        
        Route::get('level','LevelController@singleLevel');
        Route::post('level-score','LevelController@saveScore');
        Route::post('add-music', 'LevelController@addMusic');
    });

});

Route::get('content',[\App\Http\Controllers\Api\Page\PageController::class,'content']);

Route::get('send-notification', function(){
    $users = User::where('is_verified', '1')->get();
    foreach($users as $user){
        $arr = [
            'sender_id' => 100,
            'reciever_id' => $user->id,
            'title' => 'level Created',
            'description' => 'A new Level has been created',
            'type' => 'level_create',
            'record_id' => 1,
            'seen' => '0',
            'is_admin' => '1'
        ];
        Notification::create($arr);
    }
    
    return response()->json('sucess');
});