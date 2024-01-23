<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitroingPresensiController extends Controller
{
    public function index()
    {

        $data = DB::table('presensi')
            ->select('presensi.*', 'karyawan.nama as karyawan', 'karyawan.jabatan as jabatan', 'dapertemen.nama as dapertemen')
            ->join('karyawan', 'karyawan.id', '=',  'presensi.karyawan_id')
            ->join('dapertemen', 'dapertemen.id', '=', 'karyawan.dapertemen_id')
            ->get();

        return view('pages.admin.monitoring-presensi.index', [
            'data' => $data
        ]);
    }
}
