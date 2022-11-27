@extends("layout.template")
@section("title", "Tambah Pembelian")
@section("content")
<h2 class="text-center mb-3">Tambah data Transaksi Pembelian</h2>

<form action="/pembelian" method="post" class="mb-5" enctype="multipart/form-data">
    @csrf
    {{-- <div class="mb-3">
        <label for="user_id" class="form-label">Nama user :</label>

        <select class="form-select" aria-label="Default select example" id="user_id" name="user_id">
            <option hidden>Pilih nama user</option>
            @foreach ($user as $u)
            <option value="{{$u->id}}">{{$u->nama}}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="mb-3">
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="barang_id" value="{{$barang ->id}}" hidden>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" name="harga" value="{{$barang ->harga}}" hidden>
    </div>

    <div class="mb-3">
        <label for="nama" class="form-label">Nama produk :</label>

        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama produk" value="{{$barang ->nama}}" disabled>
    </div>

    {{-- <select class="form-select" aria-label="Default select example" id="barang_id" name="barang_id">
        <input type="number" class="form-control" id="stok" placeholder="Masukkan Jumlah Pembelian" name="stok" min="1" value="{{$barang->nama}}">

        <option hidden>Pilih nama user</option>
        @foreach ($barang as $b)
        <option value="{{$b->id}}">{{$b->nama}}</option>
        @endforeach
    </select> --}}

    <div class="mb-3">
        <label for="jumlah" class="form-label">Jumlah : </label>

        <input type="number" class="form-control" id="stok" placeholder="Masukkan Jumlah Pembelian" name="jumlah" min="1">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-success px-3">Kirim</button>
    </div>
</form>

@endsection
