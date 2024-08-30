<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentController extends Controller
{
    //
    public function response(Request $request){
        return redirect()->route('home')->with('message', 'Payment has been successfully');
      
    }
}
