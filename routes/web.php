<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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

Route::get('products',[
    ProductsController::class,
    'index'
]);
Route::get('products/{id}',[
    ProductsController::class,
    'detail'
]);
// Route::get('products/about',[
//     ProductsController::class,
//     'about'
// ]);

// Route::get('/', function () {
//     return view('home');
//     ///return env('MY_NAME');
// });
// Route::get('/food',function(){
//     return ['pho','bun','com tam','mi xao'];
// });
// Route::get('/aboutme',function(){
//     return response() ->json([
//         'name'=> 'Hoang Hiep',
//         'age' => 15
//     ]);
// });
// Route::get('/something', function(){
//     return redirect('/food');
// });