<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view("Customer.index", compact("barang"));
    }

}
