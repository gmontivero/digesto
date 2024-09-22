<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Autoridad;
use Illuminate\Http\Request;
use App\Http\Requests\AutoridadRequest;
use Illuminate\Support\Facades\Storage;

class AutoridadController extends Controller
{
    public function index()
    {
        $autoridades = Autoridad::paginate(5);
        return inertia('Autoridades/Index', ['autoridades' => $autoridades]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cargos = Cargo::all();
        return inertia('Autoridades/Create',['cargos' => $cargos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AutoridadRequest $request)
    {
        $fields = $request->validated();
        if ($request->hasFile('imagen')){
            $fields['imagen'] = Storage::disk('public')->put('autoridades',$request->imagen);
        }

        Autoridad::create($fields);

        return redirect()->route('autoridad.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $autoridad = Autoridad::find($id);
        $cargos = Cargo::all();
        return inertia('Autoridades/Edit',['autoridad' => $autoridad, 'cargos' => $cargos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AutoridadRequest $request, string $id)
    {

        $autoridad = Autoridad::find($id);
        $autoridad->update($request->validated());
        return redirect()->route('autoridad.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $autoridad = Autoridad::find($id);
        $autoridad->delete();
        return redirect()->route('autoridad.index');
    }
}
