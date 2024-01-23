<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LokasiKantorController extends Controller
{
    public function index()
    {
        $lokasi_kantor = DB::table('lokasi_kantor')->select('lokasi_kantor.*', 'dapertemen.nama as dapertemen')
        ->join('dapertemen', 'dapertemen.id', '=', 'lokasi_kantor.dapertemen_id')
        ->get();
        return view('pages.admin.lokasi-kantor.index', [
            'lokasi_kantor' => $lokasi_kantor
        ]);
    }

    public function tambah()
    {
        $dapertemen = DB::table('dapertemen')->select('*')->get();

        return view('pages.admin.lokasi-kantor.tambah', [
            'dapertemen' => $dapertemen
        ]);
    }


    public function simpan(Request $request)
    {
        DB::table('lokasi_kantor')->insert([
            'dapertemen_id' => $request->dapertemen_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);

        return redirect()->route('lokasi_kantor');
    }
}
