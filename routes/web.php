<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/games',function(){
    return "Bienvenido a la web que listara los juegos comprados";
});

Route::get('/games/create',function(){
    return "Esta es la pagina donde se creara el formulario para dar de alta juegos";
});

Route::get('/games/{name_game}/{categoria?}',function($name_game,$categoria=null){
    if($categoria){
        return "Bienvenido a la pagina del juego:" .$name_game. "que pertenece a la categoria :" .$categoria;
    }else{
        return "Bienvenido a la pagina del juego:".$name_game;
    }
});