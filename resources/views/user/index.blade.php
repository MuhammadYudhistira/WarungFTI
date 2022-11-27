@extends("layout.template")
@section('title', 'List User')
@section("content")
<h2 class="text-center mb-3">List Data User</h2>


<table class="table  table-bordered border-dark table-hover">
    <thead>
        <tr class="bg-secondary">
            <th scope="col" class="text-center">No.</th>
            <th scope="col">ID User</th>
            <th scope="col">Nama</th>
            <th scope="col">No HP</th>
            <th scope="col">Username</th>
            <th scope="col">Role</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $u)
        <tr>
            <td class="text-center">{{ $loop->iteration }}.</td>
            <td>{{ $u->id }}</td>
            <td>{{ $u->nama }}</td>
            <td>{{ $u->no_hp }}</td>
            <td>{{ $u->username }}</td>
            @if($u->role == '1')
                <td>admin</td>
            @else
            <td>Customer</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
