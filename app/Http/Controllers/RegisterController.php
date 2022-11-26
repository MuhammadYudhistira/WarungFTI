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

    public function store(){
        return request()->all();
    }
}
