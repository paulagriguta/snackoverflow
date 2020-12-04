<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titlu',
        'descriere',
        'data',
        'idCategorie',
        'idUtilizator',
        'idRating',
        'verificat'
    ];
}
