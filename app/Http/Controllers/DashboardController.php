<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private function countLivre()
    {
        $livreCount = Livre::count();
        $result = 
        [
            'type'=>'valeur',
            'titre'=>'le nombre total de livres :',
            'countLivre'=>$livreCount
        ];
        return $result;
    }
    private function DerniersAjouter()
    {
        $livres = Livre::latest()->limit(2)->get();
        $result = 
        [
            'type'=>'liste',
            'titre'=>'les 5 derniers livres ajoutés',
            'livres'=>$livres
        ];
        return $result;
    }
    public function index()
    {
        $countLivre = $this->countLivre();
        $livres = $this->DerniersAjouter();
        return view('dashboard',compact('countLivre','livres'));
    }
}
