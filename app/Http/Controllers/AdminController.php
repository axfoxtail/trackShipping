<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Validator;
use App\User;
use App\Message;
use App\Quote;
use App\Mail\ReplyMail;
use Auth;

class AdminController extends Controller
{
    // ===================================== //
    public function index(Request $request) {
        // return view('admin.dashboard.index');
        return redirect()->route('admin.business');
    }

    // ===================================== //
    public function login(Request $request) {
        if($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if($validator->fails()) {
                return Redirect::back();
            }

            $credentials = ['email' => $request->email, 'password' => $request->password, 'role' => 'admin'];

            if (Auth::attempt($credentials)) {
                return redirect()->route('admin');
            }
    
            return Redirect::back();
    
        } else {
    
            return view('admin.auth.login');
    
        }
    }

    // ===================================== //

    public function businessUsers(Request $request) {
        $users = User::where('role', 'business')->get();
        
        return view('admin.users.business', ['users' => $users]);
    }

    public function customers(Request $request) {
        $users = User::where('role', 'normal')->get();

        return view('admin.users.customers', ['users' => $users]);
    }

    public function editUser(Request $request, $id) {
        $user = User::find($id);

        return view('admin.users.edit', ['user' => $user]);
    }

    public function updateUser(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'fname' => ['required', 'string', 'max:255'],
            // 'lname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'role' => ['required', 'string', 'max:255']
        ]);

        if($validator->fails()) {
            // dd($validator->errors());
            return Redirect::back()->withErrors($validator->errors());
        }

        $user = User::find($id);
        $user->fname = $request->fname ? $request->fname : $user->fname;
        $user->lname = $request->lname ? $request->lname : $user->lname;
        $user->username = $request->username ? $request->username : $user->username;
        $user->email = $request->email ? $request->email : $user->email;
        $user->phone = $request->phone ? $request->phone : $user->phone;
        $user->fax = $request->fax ? $request->fax : $user->fax;
        $user->address = $request->address ? $request->address : $user->address;
        $user->city = $request->city ? $request->city : $user->city;
        $user->country = $request->country ? $request->country : $user->country;
        $user->postcode = $request->postcode ? $request->postcode : $user->postcode;
        $user->partner_email = $request->partner_email ? $request->partner_email : $user->partner_email;
        $user->bname = $request->bname ? $request->bname : $user->bname;
        $user->url = $request->url ? $request->url : $user->url;
        $user->bnature = $request->bnature ? $request->bnature : $user->bnature;
        $user->btype = $request->btype ? $request->btype : $user->btype;
        $user->title = $request->title ? $request->title : $user->title;
        $user->bfname = $request->bfname ? $request->bfname : $user->bfname;
        $user->blname = $request->blname ? $request->blname : $user->blname;
        $user->save();

        return Redirect::back();
    }

    public function deleteUser(Request $request, $id) {
        User::find($id)->delete();

        return response()->json(['status' => true, 'message' => 'Successfully deleted.'], 200);
    }

    // ===================================== //
    public function contactMails(Request $request) {
        $messages = Message::where('user_id', 'message')->get();

        return view('admin.mails.contact', ['messages' => $messages]);
    }

    public function ticketMails(Request $request) {
        $messages = Message::with('users')->where('user_id', '!=', 'message')->get();

        return view('admin.mails.ticket', ['messages' => $messages]);
    }

    public function reply(Request $request) {
        $validator = Validator::make($request->all(), [
            'message_id' => 'required',
            'to_email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        
        if($validator->fails()) {
            return response()->json(['status' => false, 'message' => $validator->errors() ], 200);
        }

        $data['email'] = $request->to_email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        
        \Mail::to($data['email'])->send(new ReplyMail($data));

        return response()->json(['status' => true, 'message' => 'Successfully Replied'], 200);
    }

    // ===================================== //
    public function transactions(Request $request) {
        $transactions = Quote::all();

        return view('admin.transactions.index', ['transactions' => $transactions]);
    }

    public function approveTransaction(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'price' => 'required',
        ]);

        if($validator->fails()) {
            return response()->json(['status' => false, 'message' => 'Required Shipping Price.'], 200);
        }

        $transaction = Quote::find($id);
        $transaction->price = $request->price;
        $transaction->status = 'approved';
        $transaction->trackingnumber = $this->generateTrackingNumber();
        $transaction->save();

        return response()->json(['status' => true, 'message' => 'Successfully Approved.'], 200);
    }

    private function generateTrackingNumber() {
        $number = mt_rand(1000000000, 9999999999); // better than rand()
    
        // call the same function if the barcode exists already
        if ($this->TrackingNumberExists($number)) {
            return $this->generateTrackingNumber();
        }
    
        // otherwise, it's valid and can be used
        return $number;
    }
    
    private function TrackingNumberExists($number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return Quote::where('trackingnumber', $number)->exists();
    }

    public function editTransaction(Request $request, $id) {

    }

    public function updateTransaction(Request $request, $id) {

    }
}
