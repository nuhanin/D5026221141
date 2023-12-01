@extends('master2')

@section('konten')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-8">
               <input name="nama" type = "text" class = "form-control" id = "nama" placeholder = "Masukkan nama pegawai" value="{{ $p->pegawai_nama }}">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-8">
               <input name="jabatan" type = "text" class = "form-control" id = "jabatan" placeholder = "Masukkan jabatan pegawai" value="{{ $p->pegawai_jabatan }}">
            </div>
         </div>
         <div class = "form-group row">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-8">
               <input name="umur" type = "number" class = "form-control" id = "umur" placeholder = "Masukkan umur pegawai" value="{{ $p->pegawai_umur }}">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "alamat" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-8">
               <input name="alamat" class = "form-control" id = "alamat" placeholder = "Masukkan alamat pegawai" value="{{ $p->pegawai_alamat }}">
            </div>
         </div>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach
@endsection
