<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use App\Models\video;

class bannerController extends Controller
{
    public function create(){
        return view('upload');
    }
    //get list of banner

    public function getBanner(){
        $getlist = banner::with('videodetails')->get();
       dd($getlist);
    }


    public function insertBanner(Request $request)
    {
        try {
            // Validate that the image and video are present in the request
            $request->validate([
                'image_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
                'title' => 'required|string|max:255',
            ]);
    
            // Variables for storing request data
            $bannerImage = $request->file('image_url');
            $video = $request->file('video');
            $title = $request->title;
    
            // Initialize the variables
            $imageid = '';
    
            // Check if image is present
            if ($bannerImage) {
                $insersetbanner = new Banner;
                $insersetbanner->title = $title;
                $insersetbanner->save();
    
                // Get the newly created banner ID
                $imageid = $insersetbanner->id;
    
                // Define the folder path
                $folderPath = 'uploads/' . $imageid;
    
                // Store the image
                $imageName = $bannerImage->getClientOriginalName();
                $bannerImage->move(public_path($folderPath), $imageName);
    
                // Update the banner image path in the database
                $insersetbanner->image_url = $folderPath . '/' . $imageName;
                $insersetbanner->save();
            }
    
            // Check if image ID exists and video is present
            if ($imageid && $video) {
                $insertvideo = new Video;
                $insertvideo->banner_id = $imageid;
    
                // Store the video
                $videoName = $video->getClientOriginalName();
                $video->move(public_path($folderPath), $videoName);
    
                // Set the video URL to the stored path
                $insertvideo->video_url = $folderPath . '/' . $videoName;
                $insertvideo->save();
            }
            if($insertvideo){
                dd("inserted successfully");
            }else{
                dd("someting failed");
            }

        } catch (Exception $e) {
            // Handle the exception
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    

}
