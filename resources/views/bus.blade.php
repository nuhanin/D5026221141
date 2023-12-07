@extends('master3')
@section('title', 'Database Bus')

@section('page_title')
<h3>Data Bus</h3>

<a href="/bus/tambahBus"> + Tambah Bus</a>

<br/>
<br/>
@endsection

@section('content')
<table class="table table-stripped table-hover">
    <tr>
        <th>Merk Bus</th>
        <th>Jumlah Bus</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach ($bus as $b)
    <tr>
        <td>{{ $b->merkbus }}</td>
        <td>{{ $b->jumlahbus }}</td>
        <td>{{ $b->tersedia }}</td>
        <td>
            <a href="/bus/viewBus/{{ $b->kodebus }}" class="btn btn-success">View</a>
            |
            <a href="/bus/editBus/{{ $b->kodebus }}" class="btn btn-warning">Edit</a>
            |
            <a href="/bus/hapus/{{ $b->kodebus }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>
{{-- {{$bus->links}} --}}
@endsection
