<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class homerowlist extends Model
{
    use HasFactory;
    protected $table = 'homerowlist';
    public function movielistdata()
    {
        return $this->hasMany(movie::class,'id', 'movie_id');
    }
}
