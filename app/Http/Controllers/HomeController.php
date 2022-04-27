<?php

namespace App\Http\Controllers;


use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function portfolio()
    {
        return view('portfolio');
    }

    public function admin(){

        $posts = BlogPost::all(); //obtener todas las publicaciones de blog de DB
        return view('blog.admin', [
            'posts' => $posts,
        ]); //devuelve la vista de la lista de los posts

    }

    public function contact(){

        $posts = BlogPost::all(); //obtener todas las publicaciones de blog de DB
        return view('blog.admin', [
            'posts' => $posts,
        ]); //devuelve la vista de la lista de los posts

    }



}
