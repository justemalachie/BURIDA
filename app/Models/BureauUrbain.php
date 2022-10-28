<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BureauUrbain extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_bureau_urbain',
        'libelle_bureau_urbain',
        'localite_bureau_urbain',
    ];
}
