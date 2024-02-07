<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Relacion de muchos a muchos polimorfica - Inversa
    public function posts(){
        return $this->morphedByMany(Tag::class, 'taggable');
    }
}
