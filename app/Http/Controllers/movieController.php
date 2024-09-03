<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie;
use App\Models\gener;
use App\Models\movie_geners;
use Razorpay\Api\Api;

class movieController extends Controller
{
    //
    public function home(){
        $bannerimages = movie::with(['bannerimages','moviegeners.moviegenersnames'])
        ->where('is_active',1)
        ->where('is_banner',1)
        ->get();  
        $movies =  movie::with(['bannerimages','moviegeners.moviegenersnames'])
        ->where('is_active',1)
        ->get();
         return view('welcome',compact('bannerimages', 'movies'));
    }
   

    public function buymovie(Request $request){
        $amount =10;
        $api = new Api('rzp_test_Muz86P5J70D0WT','yZldW99eLTXafJyr0lImT0K0');
        $order = $api->order->create([
            'receipt'         => 'order_rcptid_11',
            'amount'          => $amount * 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ]);
       
        $id = $request->id;
        $moviedetails = movie::with('bannerimages')->find($id);
        return view('paymentrefrence',compact('moviedetails','order'));

    }

    public function watchtrailer(Request $request){
        $movieid = $request->id;
        $trailers = Movie::with('bannerimages')->find($movieid);
        // dd($trailers);
        return view('trailers',compact('trailers'));

    }
}
