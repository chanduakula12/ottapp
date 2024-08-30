<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    public function bannerimages(){
        return $this->hasOne(bannerimage::class, 'movie_id', 'id');
    }
    
    public function moviegeners()
    {
        return $this->hasMany(movie_geners::class, 'gener_id', 'id');
    }
     

}
