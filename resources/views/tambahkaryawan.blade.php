@extends('masterkaryawan')

@section('content')
	<h3>Data Karyawan</h3>

	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post">
		{{ csrf_field() }}
        <div class = "form-group row">
            <label for = "kode" class = "col-sm-2 control-label">Kode Karyawan</label>
            <div class = "col-sm-8">
               <input name="kode" type = "text" class = "form-control" id = "kode" placeholder = "Masukkan kode karyawan">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama Lengkap</label>
            <div class = "col-sm-8">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan nama karyawan">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "divisi" class = "col-sm-2 control-label">Divisi</label>
            <div class = "col-sm-8">
               <input name="divisi" type = "text" class = "form-control" id = "divisi" placeholder = "Masukkan nama divisi">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "departemen" class = "col-sm-2 control-label">Departemen</label>
            <div class = "col-sm-8">
               <input name="departemen" type = "text" class = "form-control" id = "departemen" placeholder = "Masukkan nama departemen">
            </div>
         </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
