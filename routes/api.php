<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get("/saludo",function(Request $request){
    $message = ['mensaje' => "Hola Mundo !!!, desde la API Backend_ProjectFG"];
    return response()->json($message);  /*Arreglo asociativo en php simil a objeto json*/

});

Route::post("/user",function(Request $request){
    $message = ['Usuario' => "Luis Gómez"];
    return response()->json($message);  
});

Route::put("/customer",function(Request $request){
    $message = ['Cliente' => "Juan Rios",
        'Datos del cliente:'=>[
        'Edad:'=>"35",
        'Género'=>'M',
        'Id'=>'CC',
        'id_Número'=>'123456789',
        'detalle de la compra:'=>['5000','10000','50000']]         /*sin coma el úlimo*/
    ];
    return response()->json($message);  
});

Route::patch("/customer2",function(Request $request){
    $message = ['Cliente' => "Maria Sierra"];
    return response()->json($message);  
});

Route::delete("/user2",function(Request $request){
    $message = ['usuario' => "Pedro Pérez"];
    return response()->json($message);  
});