@extends('master3')

@section('content')
    <div class="row">
        <div class="col-md-6"></div>

        <div class="col-md-6">
            {{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
            <h3>Informasi Bus</h3>

            <a href="/bus"> Kembali</a>

            <br />
            <br />

            @foreach ($bus as $b)
                <div class="form-horizontal">
                    <div class="form-group">
                        <div class="row mb-3">
                            <label for = "merk" class = "col-sm-3 control-label">Merk Bus</label>
                            <div class = "col-sm-6" >
                            <p name="merk" class = "form-control" id = "merk">{{ $b->merkbus }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for = "jumlah" class = "col-sm-3 control-label">Jumlah Bus</label>
                            <div class = "col-sm-6" >
                            <p name="jumlah" class = "form-control" id = "jumlah">{{ $b->jumlahbus }}</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for = "tersedia" class = "col-sm-3 control-label">Tersedia</label>
                            <div class = "col-sm-6" >
                            <p name="tersedia" class = "form-control" id = "tersedia">{{ $b->tersedia }}</p>
                            </div>
                        </div>

                        <a href="/bus" class="row mb-3 btn btn-primary" style="text-align">OK</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
