<?php

namespace App\Http\Controllers\TWT;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class TWTController extends Controller
{
    public function twtLogin(){
        if (Session::has('adminId')) {
            return redirect()->intended('/twt/dashboard')->with('message','You Are Already login');
        }
        return view('backend.auth.TwtLogin');
    }
    public function submitLogin(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $admin = Admin::where('email', $request->email)->first();
        if (!$admin) {
            return redirect()->back()->with('error', 'Invalid Email');
        }else{
            if (password_verify($request->password, $admin->password)) {
                Session::put('adminId', $admin->id);
                Session::put('adminName', $admin->name);

                $remember = $request->has('rememberme');
                Auth::guard('admin')->login($admin, $remember);

                return redirect()->intended('/twt/dashboard')->with('message','Login Success');
            } else {
                return redirect()->back()->with('error', 'Invalid Password');
            }
        }
    }
    public function twtDashboard(){
        return view('backend.admin.adminDashboard');
    }
    public function adminLogout()
    {
        // Check if the admin is logged in
        if (Auth::guard('admin')->check()) {
            // If the remember token exists, delete it from the database
            if (Auth::guard('admin')->user()->remember_token) {
                Auth::guard('admin')->user()->update(['remember_token' => null]);
            }

            // Logout the admin
            Auth::guard('admin')->logout();
        }

        // Clear the session
        session()->invalidate();
        session()->regenerateToken();

        // Redirect the user to the login page
        return redirect('/twt/login');
    }
}
