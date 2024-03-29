<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'responsable_prj',
        'description',
        'date_debut',
        'date_fin'

    ];
}
