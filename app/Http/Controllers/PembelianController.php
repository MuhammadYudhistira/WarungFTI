<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Users;
use App\Models\Barang;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {
        $pembelian = Pembelian::all();
        return view("pembelian.index", compact("pembelian"));
    }

    public function create()
    {
        $user = Users::all();
        $barang =  Barang::all();
        return view ("pembelian.create", compact("user", "barang"));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "users_id" => "required",
            "barang_id" => "required",
            "jumlah" => "required/min:1"
        ]);

        $validated["tanggal"] = date("Y-m-d h:i:s");
        Pembeluan::create($validated);

        $barang = Barang::find($validated["barang_id"]);
        $barang->update([
            "jumlah" => $barang->jumlah + $validated["jumlah"]
        ]);

        return redirect('/pembelian/list');
    }
}
