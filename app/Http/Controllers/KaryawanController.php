<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function indexkaryawan(){
        $karyawan = DB::table('karyawan')->get();
        return view('indexkaryawan',['karyawan' => $karyawan]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahkaryawan');

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kode,
            'namalengkap' => $request->nama,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
        //kenapa g pake return view? redirect melempar ke suatu url route pegawai, maka akan query all record

    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }
}
