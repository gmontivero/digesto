<?php

namespace App\Http\Controllers;

use App\Models\Comision;
use App\Models\Autoridad;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreComisionRequest;
use App\Http\Requests\UpdateComisionRequest;

class ComisionController extends Controller
{

    public function index()
    {
        $comisiones = Comision::paginate(5);
        return inertia('Comisiones/Index', ['comisiones' => $comisiones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autoridades = Autoridad::all();
        return inertia('Comisiones/Create',['autoridades' => $autoridades]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComisionRequest $request)
    {
        $fields = $request->validated();
        Comision::create($fields);
        return redirect()->route('comision.index');
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
        $comision = Comision::find($id);
        $autoridades = Autoridad::all();
        $autoridades_comisiones = DB::table('autoridades_comisiones')->join('autoridades','autoridades_comisiones.autoridad_id','=','autoridades.id')->select('autoridades.nombre','autoridades.id','autoridades_comisiones.id as idt')->get();
        return inertia('Comisiones/Edit',['comision' => $comision, 'autoridades' => $autoridades,'autoridades_comisiones' => $autoridades_comisiones]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComisionRequest $request, string $id)
    {
        $comision = Comision::find($id);
        $comision->update($request->validated());
        return redirect()->route('comision.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comision = Comision::find($id);
        $comision->delete();
        return redirect()->route('comision.index');
    }
}
