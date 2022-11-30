<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function store(Request $request){

        // return request()->all();
        $validated = $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
            'role' => 'required'
        ]);

        // dd($validated);
        $validated['password']=Hash::make($validated['password']);
        User::create($validated);

        $request->session()->flash('success','registrasi berhasil');
        return redirect('/login');

    }
}
