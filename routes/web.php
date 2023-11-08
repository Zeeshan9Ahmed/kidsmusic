<?php

use App\Http\Controllers\Admin\LoginController;
use App\Services\User\CreateUserService;
use Illuminate\Support\Facades\Artisan;
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



Route::get('/unauthorize', function () {
   return response()->json(["status"=>0,"message"=>"Sorry User is Unauthorize"], 401);
})->name('unauthorize');

Route::get('/cleared',function(){
   Artisan::call('cache:clear');
   Artisan::call('config:cache');
   Artisan::call('config:cache');
   Artisan::call('view:clear');
   return "Cleared!";
});



Route::get('/',[LoginController::class,'loginForm']);
Route::get('admin/login',[LoginController::class,'loginForm'])->name('login');
Route::post('admin/login',[LoginController::class,'login'])->name('admin.login');
Route::get('admin/logout',[LoginController::class,'logout']);

// Route::get('admin/dashboard',function(){
//    return view('admin.dashboard');        
// });


Route::group(['prefix' => 'admin'],function(){
   
   
   Route::group(['middleware'=>'isAdmin'],function(){
   
   // Admin
   Route::any('settings', [\App\Http\Controllers\Admin\AdminController::class,'myaccount']);
   Route::get('dashboard-data', [\App\Http\Controllers\Admin\AdminController::class,'dashboard'])->name('admin.dashboard');
   
   //Category
   Route::post('genere/create',[\App\Http\Controllers\Admin\GenereController::class,'store'])->name('admin.genere.create');
   Route::get('generes', [\App\Http\Controllers\Admin\GenereController::class,'index'])->name('admin.generes.index');
   Route::get('genere/edit/{id}', [\App\Http\Controllers\Admin\GenereController::class,'edit'])->name('admin.genere.edit');
   Route::post('genere/update', [\App\Http\Controllers\Admin\GenereController::class,'update'])->name('admin.genere.update');
  
   // Dashboard
   Route::get('dashboard',function(){
      return view('admin.dashboard');        
   });
   //User
   Route::get('users', [\App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.users');
   Route::get('sub-admins', [\App\Http\Controllers\Admin\UserController::class,'subAdmin'])->name('admin.sub_admin');
   Route::post('admin/create', [\App\Http\Controllers\Admin\UserController::class,'store'])->name('admin.sub_admin.create');
   Route::get('admin/edit/{id}', [\App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.sub_admin.edit');
   Route::get('admin/delete/{id}', [\App\Http\Controllers\Admin\UserController::class,'delete'])->name('admin.sub_admin.delete');
   
   Route::post('admin/update', [\App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.sub_admin.update');
   
   Route::get('user/{id}',[\App\Http\Controllers\Admin\UserController::class,'show']);
   Route::get('user/status/{id}', [\App\Http\Controllers\Admin\UserController::class,'updateStatus']);
   
   Route::get('level-add', [\App\Http\Controllers\Admin\LevelController::class,'index'])->name('admin.add.level');
   Route::post('level/create',[\App\Http\Controllers\Admin\LevelController::class,'store'])->name('admin.level.create');
   Route::post('level/update',[\App\Http\Controllers\Admin\LevelController::class,'update'])->name('admin.level.update');
   Route::get('view-levels', [\App\Http\Controllers\Admin\LevelController::class,'view'])->name('admin.view.levels');
   Route::get('level/view/{id}', [\App\Http\Controllers\Admin\LevelController::class,'viewLevels'])->name('admin.level.level');
   Route::get('level/delete-question/{id}', [\App\Http\Controllers\Admin\LevelController::class,'deleteQuestion'])->name('admin.question.delete');
  
   Route::get('page/{name}',[\App\Http\Controllers\Admin\PageController::class,'show']);
   Route::post('page/update',[\App\Http\Controllers\Admin\PageController::class,'update'])->name('admin.page.update');
   
   
   });
});