<?php

namespace App\Http\Controllers;
use App\Models\Vente;

use App\Models\Montre;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class AgentController extends Controller
{
    //
    public function dashboard()
    {
        $totalClientsCount = User::where('role', 'client')->count();
        $sommeTotale = Vente::sum('montant_total');
        // Logique du tableau de bord d'administration
        return view('agent.main',['sommeTotale' => $sommeTotale], compact('totalClientsCount'));
    }
    
    public function liste()
    {
        // Logique du tableau de bord d'administration
        return view('agent.listeMontre');
    }
    public function vente()
    {
        // Logique du tableau de bord d'administration
        $montres = Montre::all();
        return view('agent.vente')->with('montres', $montres);
    }
}
