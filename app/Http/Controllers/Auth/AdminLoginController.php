<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request){
        $this->validate($request,[
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);
        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=> $request->password])){
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }
}
