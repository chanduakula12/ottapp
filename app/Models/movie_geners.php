<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie_geners extends Model
{
    use HasFactory;
    protected $table = 'movie_geners';
    public function moviegenersnames()
    {
        return $this->hasMany(gener::class,'id', 'gener_id');
    }
}
