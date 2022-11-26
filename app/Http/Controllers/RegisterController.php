<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' =>'Register',
            'active' =>'register'
        ]);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|max:255|min:3|unique:users',
        'no_hp' => 'required|max:13|unique:users']
    );
    }
}