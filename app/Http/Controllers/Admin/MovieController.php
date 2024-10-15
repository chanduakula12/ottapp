<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gener;
use App\Models\Tag;
use App\Models\Ott;
use App\Models\movie;
use App\Models\movie_geners;

class MovieController extends Controller
{
    public function movies(){
        $movies = movie::latest('id')->paginate(12);
        return view('admin.movies', compact('movies'));
    }
    public function movieadd(){
        $geners = Gener::where('is_active', 1)->get();
        $otts = Ott::where('isactive', 1)->get();
        return view('admin.addmovie', compact('geners', 'otts'));
    }
    function uploadmovie(Request $request) {
        $movie = new movie;
        $movie->title = $request->title;
        $movie->description = $request->description;
        $movie->price = $request->price;
        $movie->is_banner = 0;
        $movie->tickets = $request->tickets ?? 0;
        $movie->buy_now = $request->buy;
        $movie->offical_website = $request->officalsite ?? '';
        $movie->watch_hours = $request->time ?? '';
        $movie->is_active = 0;
        $movie->save();
        $path = 'data/files/' . $movie->id;
        $image = $request->title . time() . '_' . $request->file('movieimage')->getClientOriginalName();
        if ($request->file('movieimage')) {
            $request->file('movieimage')->move(public_path($path), $image);
        }
        $movie->thumbnail = $path . '/' . $image;
        $movie->save();
        foreach($request->Tagname as $tag){
            $newTag = new Tag;
            $newTag->movie_id = $movie->id;
            $newTag->tag = $tag;
            $newTag->save();
        }
        foreach($request->geners as $gener){
            $GenerInfo = new movie_geners;
            $GenerInfo->movie_id = $movie->id;
            $GenerInfo->gener_id = $gener;
            $GenerInfo->save();
        }
        return redirect()->route('admin.movies')->with('message', 'Movie Details Updated Successfully');
    }
    public function moviesupload(Request $request){
        $id = $request->id;
        return view('admin.addmoviefile');
    }
    function moviesuploadfile(Request $request) {
        dd($request->all());
    }
}
