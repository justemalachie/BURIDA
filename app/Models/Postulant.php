<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_postulant',
        'prenom_postulant',
        'email_postulant',
        'lieu_habitation_postulant',
        'cni_postulant',
    ];
}
