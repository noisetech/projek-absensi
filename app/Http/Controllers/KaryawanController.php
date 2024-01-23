<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->select('karyawan.*', 'dapertemen.nama as dapertemen')
            ->join('dapertemen', 'dapertemen.id', '=', 'karyawan.dapertemen_id')
            ->paginate(10);

        $dapertemen = DB::table('dapertemen')->select('*')->get();
        return view('pages.admin.karyawan.index', [
            'karyawan' => $karyawan,
            'dapertemen' => $dapertemen
        ]);
    }

    public function data(Request $request)
    {
    }

    public function tambah()
    {
        $dapertemen = DB::table('dapertemen')->select('*')->get();
        return view('pages.admin.karyawan.tambah', [
            'dapertemen' => $dapertemen
        ]);
    }

    public function simpan(Request $request)
    {



        DB::table('karyawan')
            ->insert([
                'nama' => $request->nama,
                'dapertemen_id' => $request->dapertemen_id,
                'jabatan' => $request->jabatan,
                'no_telepon' => $request->no_hp,
                'email_pribadi' => $request->email_pribadi,
                'alamat' => $request->alamat_pribadi,
                'divisi' => $request->divisi
            ]);

        return redirect()->route('karyawan');
    }

    public function edit($id)
    {
    }

    public function update(Request $request)
    {
    }

    public function hapus(Request $request)
    {
    }
}
