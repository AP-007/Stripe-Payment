<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(){
        return view('stripe.payment');
    }

    public function payment(Request $request)
    {
        $data = $request->all();
        
        Payment::create([
            "stripeToken" => $data['stripeToken'],
            "stripeTokenType" => $data['stripeTokenType'],
            "stripeEmail" => $data['stripeEmail'],
        ]);

        return redirect()->route('success');
    }

    public function success(){
        return view('stripe.success');
    }
}