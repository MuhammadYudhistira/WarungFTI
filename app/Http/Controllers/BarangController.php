<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    public function index(){

        $barang = Barang::all();

        return view('barang.list', compact('barang'));
    }

    public function create(){

        return view('barang.create');

    }

    public function store(Request $request){
        $validated = $request->validate([
            'gambar' => 'image|required',
            'nama' => 'required',
            'harga' => 'required|min:1',
            'stok' => 'required|min:1'
        ]);
        // dd($validated['gambar'] = $request->file('gambar')->store('gambar-barang'));

        $validated['gambar'] = $request->file('gambar')->store('gambar-barang');
        Barang::create($validated);

        return redirect('/barang/list');
    }

    public function destroy(Barang $barang){

        if($barang->gambar){
            Storage::delete($barang->gambar);
        }

        $barang ->delete();
        return redirect()->back();
    }

    public function edit(Barang $barang){

        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang){

        $validated = $request->validate([
            'gambar' => 'image',
            'nama' => 'required',
            'harga' => 'required|min:1',
            // 'stok' => 'required|min:1'
        ]);

        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['gambar'] = $request->file('gambar')->store('gambar-barang');
        }
        $barang->update($validated);

        return redirect('/barang/list');
    }
}
