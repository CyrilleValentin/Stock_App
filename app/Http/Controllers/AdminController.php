<?php

namespace App\Http\Controllers;
use App\Models\Vente;

use App\Models\Montre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
        $totalClientsCount = User::where('role', 'client')->count();
        $sommeTotale = Vente::sum('montant_total');
        // Logique du tableau de bord d'administration
        return view('admin.main',['sommeTotale' => $sommeTotale], compact('totalClientsCount'));
    }
    public function ajout()
    {
        // Logique du tableau de bord d'administration
        return view('admin.ajout');
    } 
    public function liste()
    {
        // Logique du tableau de bord d'administration
        return view('admin.listeMontre');
    }
    public function vente()
    {
        // Logique du tableau de bord d'administration
        $montres = Montre::all();
        return view('admin.vente')->with('montres', $montres);
    }
    
}
