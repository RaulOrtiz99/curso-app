<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{

    public function index()
    {
        $videogames = array('Fifa22', 'NBA 22', 'Mario Kart', 'Super Mario');
        // return "Bienvenido a la web que listara los juegos comprados";
        return view('index',['games'=>$videogames]);
    }

    public function create()
    {
        // return "esta es la pagina donde se creara el formulario para dar de alta juegos,estamos utilizando un controlador de los juegos";
        return view('create');
    }

    public function help($name_game, $categoria = null)
    {
        return view('show', ['nameVideogame' => $name_game, 'categoryGame' => $categoria]);

        // if ($categoria) {
        //     return "Bienvenido a la pagina del juego:" . $name_game . "que pertenece a la categoria :" . $categoria;
        // } else {
        //     return "Bienvenido a la pagina del juego:" . $name_game;
        // }

    }

}
