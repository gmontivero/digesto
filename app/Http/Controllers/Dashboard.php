<?php

namespace App\Http\Controllers;

use App\Models\Autoridad;
use App\Models\Bloque;
use App\Models\Comision;
use App\Models\Configuracion;
use App\Models\Digesto;
use App\Models\Noticia;
use Inertia\Inertia;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function inicio(){
        $noticias = Noticia::query()->orderBy('id','desc')->limit(6)->get();
        $imagenes = Configuracion::all();
        return Inertia::render('inicio',['noticias' => $noticias,'imagenes' => $imagenes]);
    }

    public function autoridades(){
        $autoridades = Autoridad::with('cargo')->get();
        $imagenes = Configuracion::all();
        return Inertia::render('autoridades',['autoridades' => $autoridades, 'imagenes' => $imagenes]);
    }

    public function comisiones(){
        $comisiones = Comision::with('autoridades')->get();
        $imagenes = Configuracion::all();
        return Inertia::render('comisiones',['comisiones' => $comisiones, 'imagenes' => $imagenes]);
    }

    public function turismo(){
        $imagenes = Configuracion::all();
        return Inertia::render('turismo',['imagenes' => $imagenes]);
    }

    public function telefonos(){
        $imagenes = Configuracion::all();
        return Inertia::render('telefonos',['imagenes' => $imagenes]);
    }

    public function bloques(){
        $bloques = Bloque::with('autoridades')->get();
        $imagenes = Configuracion::all();
        return Inertia::render('bloques',['bloques' => $bloques, 'imagenes' => $imagenes]);
    }


    public function noticias(){
        $imagenes = Configuracion::all();
        $noticias = Noticia::query()->orderBy('id','desc')->limit(20)->get();
        return Inertia::render('noticias',['noticias' => $noticias, 'imagenes' => $imagenes]);
    }

    public function contacto(){
        $imagenes = Configuracion::all();
        return Inertia::render('contacto',['imagenes' => $imagenes]);
    }

    public function noticiadetalle(Request $request){
        $imagenes = Configuracion::all();
        $noticia = Noticia::find($request->id);
        return Inertia::render('noticiaDetalle', ['noticia' => $noticia,'imagenes' => $imagenes]);
    }

    public function digestos(){
        $imagenes = Configuracion::all();
        $query = Digesto::query();
        if (request('buscar')){
            $query->where('resumen','like', '%'.request('buscar').'%');
        }
        $digestos = $query->paginate(10);
        return Inertia::render('digesto',['digestos' => $digestos,'imagenes' => $imagenes]);
    }
}
