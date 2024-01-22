<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan')->select('karyawan.*')->get();
        return view('pages.admin.karyawan.index', [
            'karyawan' => $karyawan
        ]);
    }

    public function data(Request $request)
    {
    }

    public function tambah()
    {
        return view('pages.admin.karyawan.tambah');
    }

    public function simpan(Request $request)
    {

        // dd($request->all());

        DB::table('karyawan')
            ->insert([
                'nama' => $request->nama,
                'jabatan' => $request->jabatan,
                'no_hp' => $request->no_hp,
                'email_pribadi' => $request->email_pribadi,
                'alamat_pribadi' => $request->alamat_pribadi,
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
