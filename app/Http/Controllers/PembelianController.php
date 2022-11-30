<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\User;
use App\Models\Barang;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index()
    {

        $pembelian = Pembelian::all();
        $barang = Barang::all();
        // dd($pembelian);
        return view("pembelian.index", compact("pembelian", 'barang'));
    }

    public function create(Barang $barang)
    {
        $user = User::all();
        $barang =  Barang::all();
        return view ("pembelian.create", compact("user", "barang"));
    }

    public function store(Request $request, Barang $barang)
    {
        $validated = $request->validate([
            "barang_id" => "required",
            "jumlah" => "required|min:1"
        ]);

        // dd($request->harga * $validated["jumlah"]);
        $validated["total"] = $request->harga * $validated["jumlah"];
        $validated["tanggal"] = date("Y-m-d h:i:s");
        Pembelian::create($validated);

        $barang = Barang::find($validated["barang_id"]);

        $barang->update([
            "stok" => $barang->stok + $validated['jumlah']
        ]);

        return redirect('/pembelian/list');
    }
}
