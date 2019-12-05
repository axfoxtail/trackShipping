<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Address;
use App\Quote;
use App\Mail\TransactionConfirmMail;

class QuoteController extends Controller
{
    public function index(){
        $transactions = Quote::where('user_id', '=', Auth::user()->id)->where('status', '=', 'approved')->get();
        $count = $transactions->count();

        return View('transactions.index', ['transactions' => $transactions, 'count'=> $count]);
    }

    public function getItem($id){
       
        $transaction = Quote::where('id', $id)->first();

        $faddress = Address::where('id', $transaction->from)->first();
        $taddress = Address::where('id', $transaction->to)->first();


        return View('view_transaction.index', ['transaction' => $transaction, 'faddress' => $faddress, 'taddress' => $taddress]);
    }
    public function insert(Request $request)
    {

        $faddress = new Address();
        $faddress->address = $request->input('faddress');
        $faddress->city = $request->input('fcity');
        $faddress->postcode = $request->input('fpostcode');
        $faddress->country = $request->input('fcountry');
        $faddress->save();
        
        $taddress = new Address();
        $taddress->address = $request->input('taddress');
        $taddress->city = $request->input('tcity');
        $taddress->postcode = $request->input('tpostcode');
        $taddress->country = $request->input('tcountry');
        $taddress->save();
        
        $quote = new Quote();
        $quote->package = $request->input('packing');
        $quote->length = $request->input('length');
        $quote->width = $request->input('width');
        $quote->height = $request->input('height');
        $quote->weight = $request->input('weight');
        $quote->date = $request->input('datepicker');
        $quote->extra = $request->input('extrainfo');

        $quote->gender = $request->input('gender');
        $quote->fname = $request->input('fname');
        $quote->lname = $request->input('lname');
        $quote->email = $request->input('email');
        $quote->phone = $request->input('phone');

        $quote->from = $faddress->id;
        $quote->to = $taddress->id;

        $quote->status = 'created';

        if(Auth::guest()){

            $user = User::where('email', $request->email)->first();

            if($user){
                $quote->user_id = $user->id;
            } else {

                $newUser = new User();
                $newUser->fname = $request->input('fname');
                $newUser->lname = $request->input('lname');
                $newUser->email = $request->input('email');
                $newUser->phone = $request->input('phone');
                $newUser->username = $request->input('fname');
                $newUser->role = 'guest';
                $newUser->password = Hash::make('guest');
                $newUser->address = $request->input('taddress');
                $newUser->city = $request->input('tcity');
                $newUser->postcode = $request->input('tpostcode');
                $newUser->country = $request->input('tcountry');

                $newUser->save();

                $quote->user_id = $newUser->id;

            }
            
        } else {
            $quote->user_id = Auth::user()->id;

        }

        $quote->save();

        return redirect()->back();

    }
}
