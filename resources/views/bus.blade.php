@extends('master3')
@section('title', 'Database Bus')
@section('page_title')
    <h3>Data Persediaan Bus</h3>

    {{-- <a href="/pegawai/tambah"> + Tambah Bus Baru</a> --}}

    <br />
    <br />
@endsection
@section('konten')
<table class="table table-striped table-hover">
    <tr>
        <th>Kode</th>
        <th>Merk</th>
        <th>Jumlah</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach ($bus as $b)
        <tr>
            <td>{{ $b->bus_kode }}</td>
            <td>{{ $b->bus_merk }}</td>
            <td>{{ $b->bus_jumlah }}</td>
            <td>{{ $b->bus_tersedia }}</td>
            {{-- <td>
                <a href="/bus/view/{{ $b->bus_id }}" class="btn btn-success">View</a>
                |
                <a href="/bus/edit/{{ $b->bus_id }}" class="btn btn-warning">Edit</a>
                |
                <a href="/bus/hapus/{{ $b->bus_id }}" class="btn btn-danger">Hapus</a>
            </td> --}}
        </tr>
    @endforeach
</table>
{{-- {{ $pegawai->links() }} --}}
@endsection
