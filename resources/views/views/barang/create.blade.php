@extends("layout.template")
@section('title','Create Barang')
@section("content")
<h2 class="text-center mb-3">Tambah data produk</h2>

<form action="/barang" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="nama" class="form-label">Nama produk :</label>

        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="nama">
    </div>

    <div class="mb-3">
        <label for="harga" class="form-label">Harga produk :</label>

        <input type="number" class="form-control" id="harga" placeholder="Masukkan harga produk" name="harga" min="1">
    </div>

    <div class="mb-3">
        <label for="jumlah" class="form-label">Stok : </label>

        <input type="number" class="form-control" id="stok" placeholder="Masukkan harga produk" name="stok" min="1">
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Gambar</label>
        <img class="img-preview img-fluid mb-3 col-sm-5">
        <input class="form-control" type="file" id="image" name="gambar" onchange="previewImage()">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-success px-3">Kirim</button>
    </div>
</form>

@endsection
