<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aquí están todos los posts";
    }

    public function create()
    {
        return "Aquí se muestra el formulario para crear un nuevo post";
    }

    public function show($post)
    {
        return "Aquí se muestra el Post: {$post}";
    }
}
