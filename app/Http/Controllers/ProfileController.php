<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class ProfileController extends Controller
{
	public function index()
	{
		$user = Auth::user();
		return view('dashboard.profile')->with('user', $user);
	}

    public function changePassword(Request $request)
    {
    	$request->validate([
		    'current_password' => 'required',
		    'password' => 'required|min:8|confirmed'
		]);

    	// return Auth::user()->password;

		if (!(Hash::check($request->current_password, Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()
            	->withErrors([
            			'current_password'=>'Your password is incorrect.'
            		]);
        }
 
        if(strcmp($request->current_password, $request->password) == 0){
            //Current password and new password are same
            return redirect()->back()
            	->withErrors([
            			'current_password'=>'Your new password cannot be same as your current password.'
            		]);
        }

		$user = Auth::user();
        $user->password = Hash::make($request->password);
        $user->save();

        Session::flash('success', "Password changed successfully!");
        return redirect()->back();
    }

    public function updateProfile(Request $request)
    {
    	$request->validate([
		    'name' => 'required',
		    'email' => 'required|email'
		]);

		$user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        Session::flash('success', "Profile updated");
        return redirect()->back();
    }
}
