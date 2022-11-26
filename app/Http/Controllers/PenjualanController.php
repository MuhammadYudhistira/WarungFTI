<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Users;
use App\Models\Barang;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all();
        return view("penjualan.index", compact("penjualan"));
    }

    public function create()
    {
        $user = Users::all();
        $barang =  Barang::all();
        return view ("penjualan.create", compact("user", "barang"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "users_id" => "required",
            "barang_id" => "required",
            "jumlah" => "required/min:1"
        ]);

        $validated["tanggal"] = date("Y-m-d h:i:s");
        Penjualan::create($validated);

        $barang = Barang::find($validated["barang_id"]);
        $barang->update([
            "jumlah" => $barang->jumlah - $validated["jumlah"]
        ]);

        return redirect('/penjualan/list');
    }
}
