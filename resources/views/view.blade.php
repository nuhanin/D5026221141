@extends('master2')

@section('konten')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
            <h3>Informasi Pegawai</h3>

            <a href="/pegawai"> Kembali</a>

            <br />
            <br />

            @foreach ($pegawai as $p)
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="row mb-3">
                            <div class="col-sm-3">Nama</div>
                            <div class="col-sm-5">: {{$p->pegawai_nama}}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">Jabatan</div>
                            <div class="col-sm-5">: {{ $p->pegawai_jabatan }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">Umur</div>
                            <div class="col-sm-5">: {{ $p->pegawai_umur }}</div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">Alamat</div>
                            <div class="col-sm-5">: {{ $p->pegawai_alamat }}</div>
                        </div>

                        <a href="/pegawai" class="row mb-3 btn btn-primary justify-center">OK</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
