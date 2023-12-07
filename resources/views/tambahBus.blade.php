@extends('master3')

@section('content')
	<h3>Data Bus</h3>

	<a href="/bus"> Kembali</a>

	<br/>
	<br/>

	<form action="/bus/store" method="post">
		{{ csrf_field() }}
		 <div class = "form-group row">
            <label for = "merk" class = "col-sm-2 control-label">Merk Bus</label>
            <div class = "col-sm-8">
               <input name="merk" type = "text" class = "form-control" id = "merk" placeholder = "Masukkan nama bus">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "jumlah" class = "col-sm-2 control-label">Jumlah Bus</label>
            <div class = "col-sm-8">
               <input name="jumlah" type = "number" class = "form-control" id = "jumlah" placeholder = "Masukkan jumlah bus">
            </div>
         </div>
		 <div class = "form-group row">
            <label for = "tersedia" class = "col-sm-2 control-label">Tersedia</label>
            <div class = "col-sm-8">
               <input name="tersedia" type="text" maxlength="1" class = "form-control" id = "tersedia" placeholder = "Masukkan ketersediaan bus">
            </div>
         </div>
		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
@endsection
