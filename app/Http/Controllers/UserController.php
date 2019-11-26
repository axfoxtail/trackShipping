<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;

class UserController extends Controller
{
  //
    public function __construct() 
    {

    }

    public function edit()
    {
        return view('edit_profile.index');
    }

    public function update(Request $request, $id)
    {
        if($request->password)
        {
            $request->validate([
                'password' => 'confirmed | min:8',
            ]);

            $user = User::find($id);
            $user->password = Hash::make($request->password);
            $user->save();

            return redirect()->back();
        }  

        if($request->address)
        {
            $request->validate([
                'address' => 'required|string|max:50',
                'city' => 'required|string|max:50',
                'country' => 'required|string|max:50',
                'postcode' => 'required|string|max:50',
            ]);

            $user = User::find($id);
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->country = $request->input('country');
            $user->postcode = $request->input('postcode');
            $user->save();

            return redirect()->back();
        }
        
        if($request->bfname)
        {
            $request->validate([
                'bfname' => 'required|string|max:50',
                'blname' => 'required|string|max:50',
            ]);

            $user = User::find($id);
            $user->bfname = $request->input('bfname');
            $user->blname = $request->input('blname');
            $user->save();

            return redirect()->back();
        }
    }

  

}
