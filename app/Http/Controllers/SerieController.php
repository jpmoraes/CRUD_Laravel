<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie;

class SerieController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::orderBy('nome')->get();
        return view('series.index', compact('series'));
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/serie');
    }

    public function update(Request $request, $id)
    {
        $serie = Serie::findOrFail($id);
        $serie->nome = $request->novo_nome;
        $serie->save();

        return redirect('/serie');
    }

    public function delete(Request $request, $id)
    {
        $serie = Serie::findOrFail($id);
        $serie->delete();

        return redirect('/serie');
    }
}
