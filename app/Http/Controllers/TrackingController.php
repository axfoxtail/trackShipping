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
        $receiver = array();
        $sender =array();
        $faddress = array();
        $taddress = array();
        $transaction = array();
        

        $tracking_number = $request->input('tr');
        $transaction = Quote::where('trackingnumber', '=', $tracking_number)->first();
        

        if($transaction){

            $error = false;
            $receiver_id = $transaction->user_id;
            $sender_id = $transaction->senderid;
            $address_from = $transaction->from;
            $address_to = $transaction->to;
            
            

            $sender = Sender::where('id', '=', $sender_id)->first();
            $receiver = User::where('id', '=', $receiver_id)->first();
            
            $faddress = Address::where('id', '=', $address_from)->first();
            $taddress = Address::where('id', '=', $address_to)->first();
            

        } else {
            
            $error = true;
            $message = 'There is no data related with this tracking number.';
        }
   
        
        return view('tracking.index', [
            'tracking_number' => $tracking_number, 
            'error' => $error, 
            'message' => $message, 
            'receiver' => $receiver, 
            'sender' => $sender, 
            'faddress' => $faddress, 
            'taddress' => $taddress,
            'transaction' => $transaction]);
    }
}
