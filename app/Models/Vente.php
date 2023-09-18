<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;
    protected $fillable = [
        'montre_id',
        'nom_montre',
        'marque_montre',
        'quantite_vendue',
        'montant_total',
    ];
}
