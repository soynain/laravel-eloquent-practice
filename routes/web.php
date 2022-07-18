<?php

use App\Models\Productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
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

Route::get('/', function () {
    $productosConsulta=Productos::all();
    return view('registrar-producto')->with(['consulta'=>json_decode($productosConsulta,true)]);
})->name('home');

Route::post('/registrar-producto',function(Request $request){
    $nuevoProducto=Productos::create([
        'idProducto'=>null,
        'nombre_producto'=>$request['name_product'],
        'fecha_registro'=>$request['fecha_registro'],
        'cantidad_stock'=>$request['stock']
    ]); /*Inserting new data */
    Log::info($nuevoProducto); /* Object created with your insert, you can do extra stuff with this*/
    return redirect()->intended('/');
})->name('register-prod');

Route::get('/borrar-prod/{idProducto}',function($idProducto){
    Log::info($idProducto);
    $productoAEliminar=Productos::where('idProducto',$idProducto);
    $productoAEliminar->delete();//it can be done single lined but its for practice 
    return redirect()->intended('/');
});
