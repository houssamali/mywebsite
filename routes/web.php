<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AddLikeController;
use Illuminate\Support\facades\Auth;


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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/index', [App\Http\Controllers\HomeController::class, 'check'])->name('index');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ],
    
    
   
    
    function(){ 

        
        Auth::routes();
        Route::middleware(['auth','isAdmin'])->group(function(){
            Route::get('/home',[DashboardController::class,'index']);
            Route::get('/users',[DashboardController::class,'users']);
            Route::get('/comments',[DashboardController::class,'comments']);
            Route::get('/likes',[DashboardController::class,'likes']);
            Route::get('/show-user/{id}',[DashboardController::class,'show_user']);
            Route::get('/show-comment/{id}',[DashboardController::class,'show_comment']);
            Route::get('/show-like/{id}',[DashboardController::class,'show_like']);


            Route::get('/delete-comment/{id}',[DashboardController::class,'delete_comment']);
            Route::get('/delete-user/{id}',[DashboardController::class,'delete_user']);
       

      
           
      
        });
       
        Route::middleware(['auth'])->group(function(){
        Route::get('/index',[FrontendController::class, 'showPage'])->name('index');
      
       Route::post('add-comment',[CommentController::class, 'addComment']);
       Route::post('add-like',[AddLikeController::class, 'addlike']);
       Route::get('remove-like',[AddLikeController::class, 'removelike']);

        });

        
       // Route::get('/show-comment',[CommentController::class, 'show']);
        Route::get('/index',[FrontendController::class, 'showPage'])->name('index');
        Route::get('/',[FrontendController::class, 'showPage'])->name('index');
                /*Route::get('/index',function(){
                    return view('index');
                        });*/
       
                

    });




   


