<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Auth;

class MessageController extends Controller
{
    public function index() {

        $tickets = Message::where('user_id', '=', Auth::user()->id)->get();
        $count = $tickets->count();

        return view('gethelp.index', ['tickets' => $tickets, 'count' => $count]);
    }
    public function insert(Request $request)
    {
        if($request->email)
        {
            $message = new Message();
            $message->email = $request->input('email');
            $message->name = $request->input('name');
            $message->subject = $request->input('subject');
            $message->content = $request->input('content');
            $message->user_id = 'message';
            $message->status = 'Open';
            $message->save();

            return redirect()->back();
        } else {
            $message = new Message();
            $message->subject = $request->input('subject');
            $message->content = $request->input('content');
            $message->user_id = Auth::user()->id;
            $message->status = 'Open';
            $message->save();

            return redirect()->back();
        }
    }
    
}
