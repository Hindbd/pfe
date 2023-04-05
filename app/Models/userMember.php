<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userMember extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nom',
        'prenom',
        'statut',
        'encadrant',
        'co-encadrant1',
        'co-encadrant2',
        'img',
        'mail',
        'password',
    ];
}
