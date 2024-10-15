<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homerows extends Model
{
    use HasFactory;
    protected $table = 'homerow';
    public function movieslist(){
        return $this->hasMany(homerowlist::class, 'movie_type_id', 'id');
    }
   
}
