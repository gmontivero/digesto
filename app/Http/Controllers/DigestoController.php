<?php

namespace App\Http\Controllers;

use App\Models\Digesto;
use Illuminate\Http\Request;
use App\Http\Requests\DigestoRequest;
use App\Models\Tipo;
use Illuminate\Support\Facades\Storage;

class DigestoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $digestos = Digesto::paginate(2);
        return inertia('Digestos/Index', ['digestos' => $digestos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipo::all();
        return inertia('Digestos/Create',['tipos' => $tipos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DigestoRequest $request)
    {
        $fields = $request->validated();
        if ($request->hasFile('pdf')){
            $fields['pdf'] = Storage::disk('public')->put('digestos',$request->pdf);
        }

        Digesto::create($fields);

        return redirect()->route('digesto.index');
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
        $digesto = Digesto::find($id);
        $tipos = Tipo::all();
        return inertia('Digestos/Edit',['digesto' => $digesto, 'tipos' => $tipos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DigestoRequest $request, string $id)
    {
        $digesto = Digesto::find($id);
        $digesto->update($request->validated());
        return redirect()->route('digesto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $digesto = Digesto::find($id);
        $digesto->delete();
        return redirect()->route('digesto.index');
    }
}
