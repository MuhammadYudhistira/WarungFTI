<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        $users = Users::all();
        return view("register.index", compact("users"));
    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required|min:3|max:255',
        'username' => 'required|max:255|min:3|unique:users',
        'no_hp' => 'required|max:13|unique:users',
        'password' => 'required|min:5|max:50']);
        $validatedData['password']=Hash::make($validatedData['password']);
        Users::create($validatedData);

        $request->session()->flash('success','registrasi berhasil');
        return redirect('/login');
    }
}