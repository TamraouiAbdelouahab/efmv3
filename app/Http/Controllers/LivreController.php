<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::paginate(3);
        return view('index',compact('livres'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(LivreRequest $request)
    {
        Livre::create($request->validated());
        return redirect()->route('livre.index')->with('message', 'Livre ajouté avec succès');
    }
}
