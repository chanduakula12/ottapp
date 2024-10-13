<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPurchase;
use App\Models\Order;

class paymentController extends Controller
{
    //
    public function response(Request $request){
        $details = UserPurchase::where('ref_id', $request->razorpay_order_id)->update([
            'paymentstatus' => 'success'
        ]);
        $orders = new Order;
        $orders->razorpay_payment_id = $request->razorpay_payment_id;
        $orders->razorpay_order_id = $request->razorpay_order_id;
        $orders->razorpay_signature = $request->razorpay_signature;
        $orders->user_id = auth()->user()->id;
        $orders->save();
        $id = UserPurchase::where('ref_id', $request->razorpay_order_id)->pluck('movie_id')->first();
        return redirect()->route('watchtrailer' , ['id' => $id])->with('message', 'Payment has been successfully');
    }
}
