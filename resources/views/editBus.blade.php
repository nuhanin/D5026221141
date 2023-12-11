@extends('master3')

@section('content')
	{{-- <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2> --}}
	<h3>Data Bus</h3>

	<a href="/bus"> Kembali</a>

	<br/>
	<br/>

	@foreach($bus as $b)
	<form action="/bus/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $b->kodebus }}"> <br/>
        <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk Bus</label>
            <div class = "col-sm-8">
               <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan merk bus" value="{{ $b->merkbus }}">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah Bus</label>
            <div class = "col-sm-8">
               <input name="jumlah" type = "number" class = "form-control" id = "jumlah" placeholder = "Masukkan jumlah bus" value="{{ $b->jumlahbus }}">
            </div>
         </div>
         <div class = "input-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               {{-- <input name="tersedia" type = "text" maxlength="1" class = "form-control" id = "tersedia" placeholder = "Masukkan ketersediaan bus" value="{{ $b->tersedia }}"> --}}
                <select class="form-select" id="tersedia" name="tersedia" value="{{ $b->tersedia }}">
                    <option value="1">Y</option>
                    <option value="0">N</option>
                </select>
            </div>

         </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
