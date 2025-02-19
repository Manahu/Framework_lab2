<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Metoda pentru pagina principală
    public function index()
    {
        return view('home'); // Afișează vizualizarea 'home'
    }

    // Metoda pentru pagina "Despre noi"
    public function about()
    {
        return view('about'); // Afișează vizualizarea 'about'
    }
}
