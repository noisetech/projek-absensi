<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JamKerjaController extends Controller
{
    public function index()
    {
        $jam_kerja = DB::table('jam_kerja')->select('*')->get();
        return view('pages.admin.jam-kerja.index', [
            'jam_kerja' => $jam_kerja
        ]);
    }

    public function tambah()
    {
        return view('pages.admin.jam-kerja.tambah');
    }


    public function simpan(Request $request)
    {
        DB::table('jam_kerja')
            ->insert([
                'kode_jk' => $request->kode_jk,
                'nama_jk' => $request->nama_jk,
                'awal_jam_masuk' => $request->awal_jam_masuk,
                'jam_masuk' => $request->jam_masuk,
                'akhir_jam_masuk' => $request->akhir_jam_masuk,
                'jam_pulang' => $request->jam_pulang
            ]);

        return redirect()->route('jam_kerja');
    }
}
