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
                                    <label for = "nama" class = "col-sm-3 control-label">Nama</label>
                                    <div class = "col-sm-6">
                                        <p name="nama" class = "form-control" id = "nama">{{ $p->pegawai_nama }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for = "jabatan" class = "col-sm-3 control-label">Jabatan</label>
                                    <div class = "col-sm-6">
                                        <p name="jabatan" class = "form-control" id = "jabatan">{{ $p->pegawai_jabatan }}
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for = "umur" class = "col-sm-3 control-label">Umur</label>
                                    <div class = "col-sm-6">
                                        <p name="umur" class = "form-control" id = "umur">{{ $p->pegawai_umur }}</p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for = "alamat" class = "col-sm-3 control-label">Alamat</label>
                                    <div class = "col-sm-6">
                                        <p name="alamat" class = "form-control" id = "alamat">{{ $p->pegawai_alamat }}</p>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-10 text-center">
                                        <a href="/pegawai" class="btn btn-primary w-25 p-1">OK</a>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
@endsection
