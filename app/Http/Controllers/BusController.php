<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function bus(){
        $bus = DB::table('bus')->get();

    	// mengirim data pegawai ke view index
    	return view('bus',['bus' => $bus]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahBus');

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('bus')->insert([
            'merkbus' => $request->merk,
            'jumlahbus' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bus');
        //kenapa g pake return view? redirect melempar ke suatu url route pegawai, maka akan query all record

    }
    public function view($id){
        $bus = DB::table('bus')->where('kodebus',$id)->get();
        return view('viewBus',['bus' => $bus]);
    }
    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$bus = DB::table('bus')->where('kodebus',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editBus',['bus' => $bus]);

	}
    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('bus')->where('kodebus',$request->id)->update([
            'merkbus' => $request->merk,
            'jumlahbus' => $request->jumlah,
            'tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bus');
    }
    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('bus')->where('kodebus',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/bus');
    }
}
