@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>www.malasngoding.com</h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

    <br />
    <br />
@endsection

@section('konten')
    <p>Cari Data Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Pegawai berdasrkan nama" value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td
                @if ($p->pegawai_umur <= 30)
                class="bg-dark text-light"
                @endif ()
                class="bg-danger text-light"
                >{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                    |
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}
@endsection
