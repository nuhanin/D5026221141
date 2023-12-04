<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusController extends Controller
{
    public function bus(){
        $bus = DB::table('bus');

    	// mengirim data pegawai ke view index
    	return view('bus',['bus' => $bus]);
    }
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('bus')->insert([
            'bus_kode' => $request->kode,
            'bus_merk' => $request->merk,
            'bus_jumlah' => $request->jumlah,
            'bus_tersedia' => $request->tersedia
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/bus');
        //kenapa g pake return view? redirect melempar ke suatu url route pegawai, maka akan query all record

    }
}
