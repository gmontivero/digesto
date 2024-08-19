<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;
use App\Http\Requests\NoticiaRequest;
use Illuminate\Support\Facades\Storage;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::paginate(2);
        return inertia('Noticias/Index', ['noticias' => $noticias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Noticias/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoticiaRequest $request)
    {
        $fields = $request->validated();
        if ($request->hasFile('foto')){
            $fields['foto'] = Storage::disk('public')->put('noticias',$request->foto);
        }

        Noticia::create($fields);

        return redirect()->route('noticia.index');
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
        $noticia = Noticia::find($id);
        return inertia('Noticias/Edit',['noticia' => $noticia]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoticiaRequest $request, string $id)
    {
        $noticia = Noticia::find($id);
        $noticia->update($request->validated());
        return redirect()->route('noticia.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $noticia = Noticia::find($id);
        $noticia->delete();
        return redirect()->route('noticia.index');
    }
}
