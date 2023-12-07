<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function nilaiKuliah(){
        $nilai = DB::table('nilaikuliah')->get();
        return view('nilaiKuliah',['nilai' => $nilai]);
    }
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahnilai');

    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->nrp,
            'NilaiAngka' => $request->nilaiangka,
            'SKS' => $request->sks,
            // 'NilaiHuruf' => $request->nilaihuruf,
            // 'Bobot' => $request->bobot
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilai');
        //kenapa g pake return view? redirect melempar ke suatu url route pegawai, maka akan query all record

    }
    public function view($id){
        $nilai = DB::table('nilaikuliah')->where('ID',$id)->get();
        return view('viewnilai',['nilai' => $nilai]);
    }
}
