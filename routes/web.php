<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


//Ruta a controlador HomeController, metodo index
Route::get('/', [HomeController::class, '__invoke']);

//Ruta a controlador PostController, metodo index
Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class, 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);


/*Route::get('/posts/create', function () {
    return "Aquí se muestra el formulario para crear un nuevo post";
});*/

/* Funcion calvat
Route::get('/posts', function () {
    return "Aquí están todos los posts";
});
*/


// Esto es para varios articulos -rutas con parametros todos los articulos que van
/*Route::get('/posts/{post}', function ($post) {
    return "Aquí se muestra el Post: {$post}";
});*/

//Ruta con parametro variable , categoria opcional ?
/*Route::get('/posts/{posts}/{category?}', function ($posts, $category = null) {
    if($category) {
        return "Aqui se muestra el Post: {$posts} de la Categoría: {$category}";
    } 
    return "Aqui se muestra el Post: {$posts}";
});*/




//Peticion 
//GET -> URL O CLICK ENLACE
//POST -> ENVIAR FORMULARIO
//PUT -> ACTUALIZAR RECURSO
//DELETE -> ELIMINAR RECURSO
//PATCH -> ACTUALIZAR PARCIALMENTE UN RECURSO 