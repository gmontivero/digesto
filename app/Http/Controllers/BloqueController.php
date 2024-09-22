<?php

namespace App\Http\Controllers;

use App\Models\Bloque;
use App\Http\Requests\StoreBloqueRequest;
use App\Http\Requests\UpdateBloqueRequest;

class BloqueController extends Controller
{

    public function index()
    {
        $bloques = Bloque::paginate(5);
        return inertia('Bloques/Index', ['bloques' => $bloques]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Bloques/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBloqueRequest $request)
    {
        $fields = $request->validated();
        Bloque::create($fields);
        return redirect()->route('bloque.index');
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
        $bloque = Bloque::find($id);
        return inertia('Bloques/Edit',['bloque' => $bloque]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBloqueRequest $request, string $id)
    {
        $bloque = Bloque::find($id);
        $bloque->update($request->validated());
        return redirect()->route('bloque.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bloque = Bloque::find($id);
        $bloque->delete();
        return redirect()->route('bloque.index');
    }
}
