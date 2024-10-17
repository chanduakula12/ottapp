<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\gener;
use App\Models\movie_geners;
use Razorpay\Api\Api;
use App\Models\UserPurchase;    
use App\Models\homerows;

class movieController extends Controller
{
    public function home(){
        if(auth()->user() && auth()->user()->role == 1){
            return redirect()->route('admin.movies');
        }
        $bannerimages = movie::with(['bannerimages','moviegeners.moviegenersnames'])
        ->where('is_active',1)
        ->where('is_banner',1)
        ->get();  
        $movies =  homerows::where('is_active', 1)->with(['movieslist.movielistdatainfo'])->get();
        // dd($movies);
        // $movies =  movie::with(['bannerimages','moviegeners.moviegenersnames'])
        // ->where('is_active',1)
        // ->get();
        // dd($movies);
         return view('welcome',compact('bannerimages', 'movies'));
    }
   

    public function buymovie(Request $request, $id){
        $moviedetails = movie::with('bannerimages')->find($id);
        $api = new Api('rzp_test_Muz86P5J70D0WT','yZldW99eLTXafJyr0lImT0K0');
        $order = $api->order->create([
            'receipt'         => 'order_rcptid_11',
            'amount'          => $moviedetails->price * 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ]);
        $details = new UserPurchase;
        $details->movie_id = $moviedetails->id;
        $details->amount = $moviedetails->price;
        $details->paymentstatus = 'pending';
        $details->ref_id = $order->id;
        $details->expirydate = date('Y-m-d', strtotime('+30 days'));
        $details->is_expired = 0;
        $details->user_id = auth()->user()->id;
        $details->save();
        $id = $request->id;
        return view('paymentrefrence',compact('moviedetails','order'));

    }

    public function watchtrailer(Request $request){
        $hasPurchased = UserPurchase::where('user_id', auth()->user()->id)->where('movie_id', $request->id)->where('paymentstatus', 'success')->where('is_expired', 0)->latest()->first();
        $hasAccess = false;
        if($hasPurchased){
            $hasAccess = true;
        }
        $movieid = $request->id;
        $trailers = Movie::with('bannerimages')->find($movieid);
        return view('trailers',compact('trailers', 'hasAccess'));

    }
    public function movies(){
        $movies = movie::with(['bannerimages','moviegeners.moviegenersnames'])->get();
        // dd($movies);
        return view('movie',compact('movies'));
    }
    public function transcationsDetails(){
        return view('transcations');
    }


}
