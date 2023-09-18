<?php

namespace App\Http\Controllers;

use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    //
    public function index()
    {
        $ventes = Vente::all();
        return view('admin.listeVente', compact('ventes'));
    }
}
