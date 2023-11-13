<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 Route::get('/', function () {
    return view('welcome');
});

//Route::get('test',function(){
    //return 'Welcome to my first route';
//});

//Route::get('user/{name}/{age?}',function($name, $age=0){
    //return 'the username is: ' . $name . ' and age is '. $age;
//});

// //Route::get ('user/{name}/{age?}',function($name,$age=0){
//     $msg = 'the username is : ' . $name;
//     if($age > 0){
//         $msg .= ' and age is: ' . $age ;
//     }
//     return $msg;
// })->where('name',['MONA','ahm']);

Route::prefix('product')->group(function(){
    Route::get('/', function(){
    return 'home page';
   });

Route::get('camera',function(){
     return 'camera page';
    });
    
Route::get('projector',function(){
     return 'projector page';
 });

});