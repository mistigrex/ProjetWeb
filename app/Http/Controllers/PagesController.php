<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Acceuil(){
        return view('pages.Acceuil');
    }

    public function Activités(){
        return view('pages.Activités');
    }

    public function Boutique(){
        return view('pages.Boutique');
    }

    public function Contact(){
        return view('pages.Contact');
    }

    public function Evenements(){
        return view('pages.Evenements');
    }

    public function Mentions(){
        return view('pages.mentions');
    }
}
