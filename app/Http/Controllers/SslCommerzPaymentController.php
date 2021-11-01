<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Stevebauman\Location\Facades\Location;

class SslCommerzPaymentController extends Controller
{

    public function serviceBooking(Request $request){
        $data['location'] = Location::get('https://'.$request->ip());
        return view("app", $data);
    }

}
