@extends("layout.template")
@section('title', 'List KeluarMasuk')
@section("content")
<h2 class="text-center mb-3">List Uang Keluar dan Uang Masuk Warung FTI</h2>

<table class="table  table-bordered border-dark table-hover">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Jumlah Uang</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @if(count ($keluarmasuk) > 0)
        @foreach ($keluarmasuk as $k)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $k->tanggal }}</td>
            <td>{{ $k->jumlah_uang }}</td>
            <td>{{ $k->status }}</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
@endsection
