<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gener;
use App\Models\Tag;
use App\Models\Ott;

class MovieController extends Controller
{
    public function movies(){
        return view('admin.movies');
    }
    public function movieadd(){
        $geners = Gener::where('is_active', 1)->get();
        $otts = Ott::where('isactive', 1)->get();
        return view('admin.addmovie', compact('geners', 'otts'));
    }
    function uploadmovie() : Returntype {
        
    }
}
