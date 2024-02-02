<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'title',
        'price',
        'description',
        'category_id',
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
}
