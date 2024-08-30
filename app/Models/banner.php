<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    use HasFactory;
    protected $table = 'banner';

    public function videodetails(){
        return $this->hasOne(video::class, 'banner_id', 'id');
    }

}
