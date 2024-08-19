<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function inicio(){
        return Inertia::render('inicio');
    }

    public function autoridades(){
        return Inertia::render('autoridades');
    }

    public function comisiones(){
        return Inertia::render('comisiones');
    }

    public function turismo(){
        return Inertia::render('turismo');
    }

    public function telefonos(){
        return Inertia::render('telefonos');
    }

    public function bloques(){
        return Inertia::render('bloques');
    }


    public function noticias(){
        return Inertia::render('noticias');
    }

    public function contacto(){
        return Inertia::render('contacto');
    }

    public function noticiadetalle(){
        return Inertia::render('noticiaDetalle');
    }

    public function digestos(){
        return Inertia::render('digesto');
    }
}
