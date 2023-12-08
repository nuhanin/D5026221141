@extends('master2')

@section('konten')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
            <h3>Informasi Nilai</h3>

            <a href="/nilai"> Kembali</a>

            <br />
            <br />

            @foreach ($nilai as $n)
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $n->ID }}"> <br />
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for = "nrp" class = "col-sm-3 control-label">NRP</label>
                            <div class = "col-sm-6" >
                            <p name="nrp" class = "form-control" id = "nrp">{{ $n->NRP }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for = "nilaiangka" class = "col-sm-3 control-label">Nilai Angka</label>
                            <div class = "col-sm-6" >
                            <p name="nilaiangka" class = "form-control" id = "nilaiangka">{{ $n->NilaiAngka }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for = "sks" class = "col-sm-3 control-label">SKS</label>
                            <div class = "col-sm-6" >
                            <p name="sks" class = "form-control" id = "sks">{{ $n->SKS }}</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-10 text-center">
                                <a href="/nilai" class="btn btn-primary w-25 p-1">OK</a>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
