<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionsController;

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

Route::get('/', [InstructionsController::class, 'index']);//'InstructionsController@index'
Route::get('/search/{text}', function(string $text){
    $obj=new InstructionsController();
    return $obj->index($text);
})->name('search');
