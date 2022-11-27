<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function authenticate(Request $request){
        $credentials=$request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('barang.list')
                        ->withSuccess('Signed in');
        }
  
        return back()->with('loginError', 'Login details are not valid');
    }
  

}
