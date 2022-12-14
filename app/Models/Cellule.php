<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellule extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_cellule',
        'libelle_cellule',
    ];
}
