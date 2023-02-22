<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function games(){
        echo'
        <h1>Games</h1>
        <ul>
            <a href="https://www.educastudio.com/category/marbel-edu-games">Marble Edu Games</a>
        </ul>
        <ul>
            <a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">Marbel And Friends Kids Games</a>
        </ul>
        ';
    }

    public function books(){
        echo'
        <h1>Books</h1>
        <ul>
            <a href="https://www.educastudio.com/category/riri-story-books">Riri Story Books</a>
        </ul>
        ';
    }

    public function songs(){
        echo'
        <h1>Songs</h1>
        <ul>
            <a href="https://www.educastudio.com/category/kolak-kids-songs">Kolak Kids Songs</a>
        </ul>
        ';
    }
}