@extends("layout.template")

@section("content")
<h2 class="text-center mb-3">Tambah data produk</h2>

<form action="/pembelian" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="user_id" class="form-label">Nama user :</label>

        <select class="form-select" aria-label="Default select example" id="user_id" name="user_id">
            <option hidden>Pilih nama user</option>
            @foreach ($user as $u)
            <option value="{{$u->id}}">{{$u->nama}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="barang_id" class="form-label">Nama barang :</label>

        <select class="form-select" aria-label="Default select example" id="barang_id" name="barang_id">
            <option hidden>Pilih nama user</option>
            @foreach ($barang as $b)
            <option value="{{$b->id}}">{{$b->nama}}</option>
            @endforeach
        </select>
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