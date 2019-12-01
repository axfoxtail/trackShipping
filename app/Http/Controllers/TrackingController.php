<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use App\Address;
use App\Quote;
use App\Sender;

class TrackingController extends Controller
{
    //
    public function __construct() 
    {

    }

    public function index(Request $request)
    {
        $tracking_number = '';
    
        $message = '';
        $sender =array();
        $faddress = array();
        $taddress = array();
        $transaction = array();
        
        if(Auth::guest()){

            $error = true;
            $message = 'You should login to see the transation.';

        } else {        

            $tracking_number = $request->input('tr');
            $transaction = Quote::where('user_id', '=', Auth::user()->id)->where('trackingnumber', '=', $tracking_number)->first();
          

            if($transaction){

                $error = false;

                $sender_id = $transaction->senderid;
                $address_from = $transaction->from;
                $address_to = $transaction->to;
               
                

                $sender = Sender::where('id', '=', $sender_id)->first();
                
                $faddress = Address::where('id', '=', $address_from)->first();
                $taddress = Address::where('id', '=', $address_to)->first();
                

            } else {
                
                $error = true;
                $message = 'There is no data related with this tracking number.';
            }
        }
        
        return view('tracking.index', [
            'tracking_number' => $tracking_number, 
            'error' => $error, 
            'message' => $message, 
            'sender' => $sender, 
            'faddress' => $faddress, 
            'taddress' => $taddress,
            'transaction' => $transaction]);
    }
}
