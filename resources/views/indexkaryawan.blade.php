@extends('masterkaryawan')
@section('title', 'Database Karyawan')

@section('page_title')
<h3>Data Karyawan</h3>
<br />
<br />
@endsection

@section('content')
<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pegawai</th>
        <th>Nama Lengkap</th>
        <th>Divisi</th>
        <th>Departemen</th>
        <th>Opsi</th>
    </tr>
    @foreach ($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td style="text-transform:uppercase;">{{ $k->namalengkap }}</td>
            <td>{{ $k->divisi }}</td>
            <td style="text-transform:lowercase;">{{ $k->departemen }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai }}" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    @endforeach
</table>

<br>
<br>
<a href="/karyawan/tambah"> + Tambah Karyawan Baru</a>
{{-- {{ $pegawai->links() }} --}}
@endsection

