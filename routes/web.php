<?php
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\backend\ExampleControllercarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\CarController;
use App\Http\Controllers\backend\AddcarController;
use App\Http\Controllers\Controller;

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
    return view ('welcome');
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

// Route::prefix('Web structure')->group(function(){
//     Route::get('/', function(){
//     return 'About page';
//    });

//    Route::prefix('Web structure')->group(function(){
//     Route::get('/', function(){
//     return 'Contact us page';
//    });

//    Route::prefix('Web structure')->group(function(){
//     Route::get('/', function(){
//     return 'Support page';
//   });

// Route::get('call',function(){
//      return 'call page';
//     });
    
// Route::get('Ticket',function(){
//      return 'Ticket page';

// Route::get('chat',function(){
//         return 'chat page';
    
//     });
    
//  });
    
// });     

// });

// });
// Route::prefix('Training')->group(function(){
//     Route::get('/', function(){
    //return 'HR page';
   //});

//Route::get('ICT',function(){
     //return 'ICT page';
    //});
    
//Route::get('Marketing',function(){
    //return 'Marketingr page';

//Route::get('Logistics',function(){
        // return 'Logistics page';
//});

//});

//});

//Route::fallback(function(){
  //  return Redirect('/');
//});

Route::get('cv',function(){
    return view('cv');

});

Route::get('login',function(){
    return view('login');

});

Route::get('addcar',function(){
    return view('addcar');

});

Route::post('receive',function(){
    return 'Data received';
})->name('receive');


Route::post('addcar1',function(){
    return 'Datacar1';
})->name('addcar1');

Route::get('test1',[ExampleController::class,'test1']);
