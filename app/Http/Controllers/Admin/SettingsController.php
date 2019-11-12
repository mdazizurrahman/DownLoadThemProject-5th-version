<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function index()
    {
        if (Auth::check() && Auth::user()->role->id == 1) {
            return view('admin.setting.settings');
        } else {
            Toastr::info('you are not authorized to access', 'Info');
            return redirect()->route('login');
        }
    }

    public function Updateprofile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email'
        ]);
        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        Toastr::success('Profile Successfully Updated :)','Success');
        return redirect()->back();

    }

    public function Updatepassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);
        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                Toastr::success('Password Successfully Changed','Success');
                Auth::logout();
                return redirect()->back();
            } else {
                Toastr::error('New password cannot be the same as old password.','Error');
                return redirect()->back();
            }
        } else {
            Toastr::error('Current password not match.','Error');
            return redirect()->back();
        }
    }


}