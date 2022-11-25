@extends("layout.template")
@section('title','Edit Barang')
@section("content")
<h2 class="text-center mb-3">Edit data barang</h2>

<form action="/barang/{{ $barang ->id }}" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="mb-3">
        <label for="nama" class="form-label">Nama produk :</label>

        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="nama" value="{{$barang ->nama}}">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga produk :</label>

        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga" value="{{$barang ->harga}}" min="1">
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Stok : </label>

        <input type="number" class="form-control" id="stok" placeholder="Masukkan harga produk" name="stok" value="{{$barang ->stok}}" min="1">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        @if($barang->gambar)
        <img src="{{asset('storage/'. $barang->gambar)}}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
        @endif
        <input class="form-control" type="file" id="image" name="gambar" onchange="previewImage()" value="{{$barang ->gambar}}">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success px-3">Kirim</button>
    </div>
</form>

@endsection
