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
use App\Models\Trailer;
use App\Models\movie_geners;

class MovieController extends Controller
{
    public function movies(){
        $movies = movie::latest('id')->get();
        return view('admin.movies', compact('movies'));
    }
    public function movieadd(){
        $geners = Gener::where('is_active', 1)->get();
        $otts = Ott::where('isactive', 1)->get();
        return view('admin.addmovie', compact('geners', 'otts'));
    }

    public function movieaddmoredetails(Request $request){

        $id = $request->id;
    
        return view('admin.addmoredetails', compact('id'));
    }
    public function bannerdetailsmore(Request $request){
        $id = $request->id;
    
        return view('admin.bannerdetailsmore', compact('id'));
    }

    public function moviebannerdetails(Request $request){
        $id = $request->id;
        return view('admin.addmoviebannerdetails', compact('id'));
        
    }
    public function movietrailers(Request $request){
        $id = $request->id;
        return view('admin.addmovietrailers', compact('id'));
    }
    function uploadmovie(Request $request) {

        $addmovietype = $request->movietype;
        $id = $request->id;
        switch ($addmovietype) {
            case 'basicmovies':
                $movie = new movie;
                $movie->title = $request->title;
                $movie->description = $request->description;
                $movie->is_banner = 0;
                $movie->watch_hours = $request->time ?? '';
                $movie->save();


                $movie = movie::findOrFail($movie->id);

                if ($request->hasFile('thumbnail')) {
                    $path = 'data/files/' . $movie->id;
                    $imageName = $movie->title . time() . '_' . $request->file('thumbnail')->getClientOriginalName();
                    $request->file('thumbnail')->move(public_path($path), $imageName);
                    $movie->thumbnail = $path . '/' . $imageName;
                    $movie->save();
                    
                    // Redirect with success message

                if($movie){
                    return redirect()->back()->with('success', 'Data saved successfully!')->with('id', $movie->id);
                }
            }

            break;

            case 'bannerdetails':
              
                // dd($id);
                $details = movie::where('id', $id)->update([
                    'price' => $request->price,
                ]);
                

                if ($request->hasFile('banner')) {
                    $path = 'data/files/' . $id;
                    $imageName = time() . '_' . $request->file('banner')->getClientOriginalName();
                    $request->file('banner')->move(public_path($path), $imageName);
                    $addbanner = new bannerimage;
                    $addbanner->banner_image = $path . '/' . $imageName;
                    $addbanner->movie_id = $id;
                    $addbanner->save();
                    
                    // Redirect with success message

                if($addbanner){
                    return redirect()->back()->with('success', 'Data saved successfully!')->with('id', $id);
                }
            }
            return redirect()->back()->with('success', 'Data saved successfully!')->with('id', $id);

                break;

                case 'trailerdetails':
                    //  dd($id);
                    if ($request->hasFile('trailer')) {
                        $path = 'trailer/' . $id;
                        $video = time() . '_' . $request->file('trailer')->getClientOriginalName();
                        $request->file('trailer')->move(public_path($path), $video);
                        $adtrailer = new Trailer;
                        $adtrailer->trailer_name  = $path . '/' . $video;
                        $adtrailer->movie_id = $id;
                        $adtrailer->save();
                        
                        // Redirect with success message
    
                    if($adtrailer){
                        return redirect()->back()->with('success', 'Data saved successfully!')->with('id', $id);
                    }
                }
                return redirect()->back()->with('success', 'Data saved successfully!')->with('id', $id);
                       
                    break;
        


    //     $movie = new movie;
    //     $movie->title = $request->title;
    //     $movie->description = $request->description;
    //     $movie->price = $request->price;
    //     $movie->is_banner = 0;
    //     $movie->tickets = $request->tickets ?? 0;
    //     $movie->buy_now = $request->buy;
    //     $movie->offical_website = $request->officalsite ?? '';
    //     $movie->watch_hours = $request->time ?? '';
    //     $movie->is_active = 0;
    //     $movie->save();
    //     $path = 'data/files/' . $movie->id;
    //     $image = $request->title . time() . '_' . $request->file('movieimage')->getClientOriginalName();
    //     if ($request->file('movieimage')) {
    //         $request->file('movieimage')->move(public_path($path), $image);
    //     }
    //     $movie->thumbnail = $path . '/' . $image;
    //     $movie->save();
    //     foreach($request->Tagname as $tag){
    //         $newTag = new Tag;
    //         $newTag->movie_id = $movie->id;
    //         $newTag->tag = $tag;
    //         $newTag->save();
    //     }
    //     foreach($request->geners as $gener){
    //         $GenerInfo = new movie_geners;
    //         $GenerInfo->movie_id = $movie->id;
    //         $GenerInfo->gener_id = $gener;
    //         $GenerInfo->save();
    //     }
    //     return redirect()->route('admin.movies')->with('message', 'Movie Details Updated Successfully');
    // }

                
            }
}
    public function moviesupload(Request $request){
        $id = $request->id;
        return view('admin.addmoviefile');
    }
    function moviesuploadfile(Request $request) {
        dd($request->all());
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
