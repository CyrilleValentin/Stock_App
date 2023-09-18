<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Montre extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'marque',
        'description',
        'prix',
        'matiere',
        'bracelet',
        'mecanisme',
        'fonction',
        'image',
        'quantite'
    ];



}
