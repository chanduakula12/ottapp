<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gener;
use App\Models\homerows;
use App\Models\homerowlist;
use App\Models\bannerimage;
use App\Models\movie;
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

    public function moviesorder(){
        $homerow = homerows::where('is_active', 1)->get();
        $movies = movie::where('is_active',1)->get();
        return view('admin.moviesorder',compact('homerow', 'movies'));
    }
    public function saveorder(Request $request){
       
        $saveorder = new homerowlist;
        $saveorder->movie_type_id = $request->type;
        $saveorder->movie_id = $request->movie;
        $saveorder->ordercount = $request->order;
        $saveorder->save();
        if($saveorder){
            return redirect()->back()->with('message', 'Successfully Completed');

        }
    }
    public function homerowlist(){
        $homerow = homerows::where('is_active', 1)->get();
        return view('admin.homerowlist',compact('homerow'));

    }
    public function homerowmovielist(Request $request){
        $id = $request->id;
        $homerowdata = homerowlist::with('movielistdata')->where('movie_type_id', $id)->orderBy('ordercount', 'ASC')->get();
        // dd($homerow);
       return view('admin.homerowlistmovie', compact('homerowdata'));
    }

    public function addmoviebanner(){
        $movielists = movie::where('is_active',1)->get();
        return view('admin.addmoviebanner', compact('movielists'));
    }
    public function savemoviebanner(Request $request)
    {
      
        $movieid = $request->type;
        // dd($request);
       
        if ($request->hasFile('bannerimage')) {
           
            $file = $request->file('bannerimage');
    
            // Define the folder path where the file should be saved (public/movies/{movie_id})
            $directory = public_path('movies/' . $movieid);
    
            // Check if the directory exists, if not, create it
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true); // Create the directory with proper permissions
            }
    
            // Define a unique filename
            $filename = time() . '_' . $file->getClientOriginalName();
    
            // Move the file to the newly created directory
            $file->move($directory, $filename);
    
            // Save the file path in the database (relative path)
            $savebanner = new bannerimage; // Make sure your model name is correct (BannerImage)
            $savebanner->movie_id = $movieid;
            $savebanner->banner_image = 'movies/' . $movieid . '/' . $filename; // Store relative path in DB
            $savebanner->save();
            if($savebanner){
                $details = movie::where('id', $movieid)->update([
                    'is_banner' => 1
                ]);
            }
    
            return back()->with('message', 'Banner uploaded successfully!');
        }
       
    
        return back()->with('error', 'No file selected or file upload failed.');
    }

    public function viewmovieslist(){
        $movielists = movie::where('is_active',1)->get();
        return view('admin.viewmovielist', compact('movielists'));
    }
    

}
