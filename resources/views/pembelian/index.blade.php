@extends("layout.template")
@section('title', 'List Transaksi Pembelian')
@section("content")
<h2 class="text-center mb-3">List Data Transaksi Pembelian</h2>
{{-- <a href="/pembelian/create" class="btn btn-success mb-3">Tambah Pembelian</a> --}}

<table class="table  table-bordered border-dark table-hover">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">ID Pembelian</th>
            <th scope="col">ID Barang</th>
            <th scope="col">Total Pembelian</th>
            <th scope="col">Jumlah Pembelian</th>
            <th scope="col">Tanggal Pembelian</th>
        </tr>
    </thead>
    <tbody>
        @if(count ($pembelian) > 0)
        @foreach ($pembelian as $e)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $e->id }}</td>
            <td>{{ $e->barang_id}}</td>
            <td>{{ $e->total}}</td>
            <td>{{ $e->jumlah }}</td>
            <td>{{ $e->tanggal}}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
