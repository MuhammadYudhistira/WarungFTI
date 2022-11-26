@extends("layout.template")
@section('title', 'List User')
@section("content")
<h2 class="text-center mb-3">List Data Transaksi Penjualan</h2>
<a href="/penjualan/create" class="btn btn-success mb-3">Tambah Penjualan</a>

<table class="table  table-bordered border-dark table-hover">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">ID penjualan</th>
            <th scope="col">ID User</th>
            <th scope="col">Tanggal Pembayaran</th>
            <th scope="col">Total Pembayaran</th>
            <th scope="col">Jenis Pembayaran</th>
            <th scope="col">Bukti Pembayaran Pembayaran</th>
            <th scope="col">Status Pembayaran</th>
        </tr>
    </thead>
    <tbody>
        @if(count ($penjualan) > 0)
        @foreach ($penjualan as $p)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $p->id_penjualan }}</td>
            <td>{{ $p->id_user }}</td>
            <td>{{ $p->tanggal_pembayaran }}</td>
            <td>{{ $p->total_pembayaran }}</td>
            <td>{{ $p->jenis_pembayaran }}</td>
            <td>{{ $p->bukti_pembayaran }}</td>
            <td>{{ $p->status_pembayaran }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
