<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Models\Configuracion;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ConfiguracionRequest;

class ConfiguracionController extends Controller
{
    public function index()
    {
        $configuraciones = Configuracion::paginate(5);
        return inertia('Configuraciones/Index',['configuraciones' => $configuraciones]);
    }

    public function create()
    {
        return inertia('Configuraciones/Create');
    }

    public function store(ConfiguracionRequest $request)
    {
        $fields = $request->validated();
        if ($request->hasFile('imagen')){
            $fields['nombre'] = $request->imagen->getClientOriginalName();
            $fields['imagen'] = Storage::disk('public')->put('inicio',$request->imagen);
        }
        Configuracion::create($fields);
        return redirect()->route('configuracion.index');
    }

    public function edit(string $id)
    {
        $configuracion = Configuracion::find($id);
        return inertia('Configuraciones/Edit',['configuracion' => $configuracion]);
    }

    public function update(Request $request, string $id)
    {
        dd($request);
        $fields = $request->validated();
        $configuracion = Configuracion::find($id);
        if ($request->hasFile('imagen')){
            $fields['nombre'] = $request->imagen->getClientOriginalName();
            $fields['imagen'] = Storage::disk('public')->put('inicio',$request->imagen);
        }
        $configuracion->update($fields);
        return redirect()->route('configuracion.index');
    }

    public function destroy(string $id)
    {
        $configuracion = Configuracion::find($id);
        $configuracion->delete();
        //return redirect()->route('configuracion.index');
    }
}
