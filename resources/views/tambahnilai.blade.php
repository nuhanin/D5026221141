@extends('master2')

@section('konten')
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilai"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilai/store" method="post">
		{{ csrf_field() }}
		 <div class = "form-group row">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
               <input name="nrp" type = "text" class = "form-control" id = "nrp" placeholder = "Masukkan NRP">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
               <input name="nilaiangka" type = "number" class = "form-control" id = "nilaiangka" placeholder = "Masukkan nilai angka">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
               <input name="sks" type="number" class = "form-control" id = "sks" placeholder = "Masukkan jumlah SKS">
            </div>
         </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
