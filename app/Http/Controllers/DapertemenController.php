<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DapertemenController extends Controller
{
    public function index(){

        $dapertemen = DB::table('dapertemen')->select('*')->get();
        return view('pages.admin.dapertemen.index', [
            'dapertemen' => $dapertemen
        ]);
    }

    public function tambah(){
        return view('pages.admin.dapertemen.tambah');
    }

    public function simpan(Request $request){

        DB::table('dapertemen')
        ->insert([
            'nama' => $request->nama
        ]);

        return redirect()->route('dapertemen');
    }
}
