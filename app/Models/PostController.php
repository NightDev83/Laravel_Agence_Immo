<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostController extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'lieux', 'surface', 'pieces', 'disponible', 'prix', 'agent', 'photo','energie','type_de_bien','exterieur','surface_exterieur','type_de_vente'];
}
