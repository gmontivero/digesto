<?php

namespace App\Http\Controllers;

use App\Models\Digesto;
use App\Models\Noticia;
use Inertia\Inertia;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function inicio(){
        $noticias = Noticia::query()->orderBy('id','desc')->limit(6)->get();
        return Inertia::render('inicio',['noticias' => $noticias]);
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
        $noticias = Noticia::query()->orderBy('id','desc')->limit(20)->get();
        return Inertia::render('noticias',['noticias' => $noticias]);
    }

    public function contacto(){
        return Inertia::render('contacto');
    }

    public function noticiadetalle(Request $request){

        $noticia = Noticia::find($request->id);
        return Inertia::render('noticiaDetalle', ['noticia' => $noticia]);
    }

    public function digestos(){
        $query = Digesto::query();

        if (request('buscar')){
            $query->where('resumen','like', '%'.request('buscar').'%');
        }

        $digestos = $query->paginate(10);
        return Inertia::render('digesto',['digestos' => $digestos]);
    }
}
