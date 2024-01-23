<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PresensiController extends Controller
{
    public function create()
    {
        $lokasi_by_karyawan = DB::table('karyawan')
            ->select('lokasi_kantor.*')
            ->join('dapertemen', 'dapertemen.id', '=', 'karyawan.dapertemen_id')
            ->join('lokasi_kantor', 'lokasi_kantor.dapertemen_id', '=', 'dapertemen.id')
            ->where('karyawan.users_id', Auth::user()->id)
            ->first();

        // dd($lokasi_by_karyawan);
        return view('pages.presensi.create', [
            'lokasi_karyawan' => $lokasi_by_karyawan
        ]);
    }

    public function simpan(Request $request)
    {

        $karyawan = DB::table('karyawan')
            ->select('lokasi_kantor.latitude as latitude', 'lokasi_kantor.longitude as longitude', 'karyawan.*')
            ->join('dapertemen', 'dapertemen.id', '=', 'karyawan.dapertemen_id')
            ->join('lokasi_kantor', 'lokasi_kantor.dapertemen_id', '=', 'dapertemen.id')
            ->where('karyawan.users_id', Auth::user()->id)
            ->first();

        $latitude_kantor = $karyawan->latitude;
        $longitude_kantor = $karyawan->longitude;
        $lokasi = $request->lokasi;
        $lokasi_user = explode(",", $lokasi);
        $latitudeUser = $lokasi_user[0];
        $longitudeUser = $lokasi_user[1];

        $jarak = $this->distance($latitude_kantor, $longitude_kantor, $latitudeUser, $longitudeUser);
        $radius = round($jarak["meters"]);

        if ($radius > 20) {
            return response()->json([
                'status' => 'error radius',
                'title' => 'Absen ditolak',
                'text' => 'Anda berada diluar radius',
                'radius' => $radius
            ]);
        }

        $image = $request->image;

        $tgl_presensi = Carbon::now();
        $jam = Carbon::now()->format('H:i:s');
        $image = $request->image;
        $folder = "public/upload/presensi/";
        $format = $tgl_presensi . "-" . time() . rand(1, 1000);
        $image_parts = explode(";base64",  $image);
        $image_base64 =  base64_decode($image_parts[1]);
        $file_name = $format . ".png";
        $file  = $folder . $file_name;


        $simpan =   DB::table('presensi')->insert([
            'lokasi' => $lokasi,
            'karyawan_id' => $karyawan->id,
            'tgl_presensi' => $tgl_presensi,
            'jam_in' => $jam,
            'foto_in' => $file_name
        ]);

        if ($simpan) {
            Storage::put($file, $image_base64);

            return response()->json([
                'status' => 'success',
                'title' => 'Berhasil',
                'text' => 'Absen masuk di proses',
                'radius' => $radius
            ]);
        }
    }

    function distance($lat1, $lon1, $lat2, $lon2)
    {
        $theta = $lon1 - $lon2;
        $miles = (sin(deg2rad($lat1)) * sin(deg2rad($lat2))) + (cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)));
        $miles = acos($miles);
        $miles = rad2deg($miles);
        $miles = $miles * 60 * 1.1515;
        $feet = $miles * 5280;
        $yards = $feet / 3;
        $kilometers = $miles * 1.609344;
        $meters = $kilometers * 1000;

        return compact('meters');
    }
}
