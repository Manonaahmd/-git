<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PostsController;

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

Route::get('test', function(){
    return 'Welcome to my first route';
});

Route::get ('user/{name}/{age?}',function($name,$age=0){
    $msg = 'the username is : ' . $name;
    if($age > 0){
        $msg .= ' and the age is: '. $age ;
    }
    return $msg;
})->whereIn('name',['Peter','Tony']);

Route::prefix('product')->group(function(){

    Route::get('/',function(){
        return 'Products home page';
    });

    Route::get('laptop',function(){
        return 'Laptop page';
    });

    Route::get('camera',function(){
        return 'Camera page';
    });

    Route::get('projector',function(){
        return 'Projectors page';
    });
});

// Route::fallback(function(){
//     return redirect('/');
// });

Route::get('cv',function(){
    return view('cv');
});

// Route::get('login',function(){
//     return view('login');
// });

// Route::post('receive',function(){
//     return 'Data received';
// })->name('receive');

Route::get('login',[ExampleController::class, 'login']);

Route::post('receive',[ExampleController::class, 'received'])->name('receive');

Route::get('test1',[ExampleController::class, 'test1']);

Route::post('storeCar',[CarController::class, 'store'])->name('storeCar');

Route::get('addCar',[CarController::class, 'create']);

Route::get('trashed',[CarController::class, 'trashed']);
Route::get('restoreCar/{id}',[CarController::class, 'restore']);

Route::get('cars', [CarController::class, 'index']);

Route::get('editCar/{id}', [CarController::class, 'edit']);

Route::get('deleteCar/{id}', [CarController::class, 'destroy']);

Route::get('carDetails/{id}', [CarController::class, 'show'])->name('carDetails');

Route::put('updateCar/{id}', [CarController::class, 'update'])->name('updateCar');
Route::get('cars', [CarController::class, 'index']);
Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');('product.destroy');
Route::get('product/{id}', [ProductController::class, 'show'])->name('product');
Route::get('trashed',[ProductController::class, 'trashed']);
Route::get('restoreproduct/{id}',[ProductController::class, 'restore']);
