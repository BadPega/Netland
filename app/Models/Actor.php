<?php

// app/Models/Actor.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'age', 'sex', 'country', 'has_won_awards'
    ];

    // Definieer de relatie naar de media
    public function media()
    {
        return $this->belongsToMany(Media::class);
    }
}
