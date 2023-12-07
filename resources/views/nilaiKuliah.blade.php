@extends('master2')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilai/tambahnilai"> + Tambah Nilai Kuliah</a>

    <br />
    <br />
@endsection

@section('konten')
    <table class="table table-striped table-hover">
        <tr>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
            <th>Opsi</th>
        </tr>
        @foreach ($nilai as $n)
            <tr>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka <= 40) D
                    @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60) C
                    @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80) B
                    @elseif ($n->NilaiAngka >= 81) A
                    @endif
                </td>
                <td>
                    {{ $n->NilaiAngka * $n->SKS }}
                </td>
                <td>
                    <a href="/nilai/viewnilai/{{ $n->ID }}" class="btn btn-success">View</a>

                </td>
            </tr>
        @endforeach
    </table>
    {{-- {{ $nilai->links() }} --}}
@endsection
