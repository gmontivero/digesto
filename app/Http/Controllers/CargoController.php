<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\CargoRequest;

class CargoController extends Controller
{
    public function index()
    {
        $cargos = Cargo::paginate(5);
        return inertia('Cargos/Index', ['cargos' => $cargos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Cargos/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CargoRequest $request)
    {
        $fields = $request->validated();
        Cargo::create($fields);
        return redirect()->route('cargo.index');
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
        $cargo = Cargo::find($id);
        return inertia('Cargos/Edit',['cargo' => $cargo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CargoRequest $request, string $id)
    {
        $cargo = Cargo::find($id);
        $cargo->update($request->validated());
        return redirect()->route('cargo.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cargo = Cargo::find($id);
        $cargo->delete();
        return redirect()->route('cargo.index');
    }
}
