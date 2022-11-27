<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Penjualan;

class KeluarMasukController extends Controller
{
    public function index()
    {
        $keluarmasuk = KeluarMasuk::all();
        return view("keluarmasuk.index", compact("keluarmasuk"));
    }
}
