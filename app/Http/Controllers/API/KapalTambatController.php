<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\KapalTambat;
use Illuminate\Http\Request;

class KapalTambatController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama_perusahaan = $request->input('nama_perusahaan');
        $nama_kapal = $request->input('nama_kapal');
        $tanggal_masuk = $request->input('tanggal_masuk');
        $tanggal_keluar = $request->input('tanggal_keluar');
        $jam_masuk = $request->input('jam_masuk');
        $jam_keluar = $request->input('jam_keluar');
        $kegiatan = $request->input('kegiatan');
        $tanggal_mulai_connect = $request->input('tanggal_mulai_connect');
        $tanggal_selesai_connect = $request->input('tanggal_selesai_connect'); 
        $lokasi = $request->input('lokasi');
        $security = $request->input('security');
        $pos = $request->input('pos');
        $keterangan = $request->input('keterangan');

        if($id) {
            $kapalTambat = KapalTambat::find($id);

            if($kapalTambat) {
                return ResponseFormatter::success(
                    $kapalTambat, 
                    'Data Kapal Tambat Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }

        $kapalTambat = KapalTambat::query();

        if($nama_perusahaan) {
            $kapalTambat->where('nama_perusahaan', 'like', '%' . $nama_perusahaan . '%');
        }

        if($nama_kapal) {
            $kapalTambat->where('nama_kapal', 'like', '%' . $nama_kapal . '%');
        }

        if($tanggal_masuk) {
            $kapalTambat->where('tanggal_masuk', 'like', '%' . $tanggal_masuk . '%');
        }

        if($tanggal_keluar) {
            $kapalTambat->where('tanggal_keluar', 'like', '%' . $tanggal_keluar . '%');
        }

        if($jam_masuk) {
            $kapalTambat->where('jam_masuk', 'like', '%' . $jam_masuk . '%');
        }

        if($jam_keluar) {
            $kapalTambat->where('jam_keluar', 'like', '%' . $jam_keluar . '%');
        }

        if($kegiatan) {
            $kapalTambat->where('kegiatan', 'like', '%' . $kegiatan . '%');
        }

        if($tanggal_mulai_connect) {
            $kapalTambat->where('tanggal_mulai$tanggal_mulai_connect', 'like', '%' . $tanggal_mulai_connect . '%');
        }

        if($tanggal_selesai_connect) {
            $kapalTambat->where('tanggal$tanggal_selesai_connect', 'like', '%' . $tanggal_selesai_connect . '%');
        }

        if($lokasi) {
            $kapalTambat->where('lok$lokasi', 'like', '%' . $lokasi . '%');
        }

        if($security) {
            $kapalTambat->where('sec$security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $kapalTambat->where('pos', 'like', '%' . $pos . '%');
        }

        if($keterangan) {
            $kapalTambat->where('kete$keterangan', 'like', '%' . $keterangan . '%');
        }

        return ResponseFormatter::success(
            $kapalTambat->paginate($limit), 
            'Data Kapal Tambat Success'
        );
    }
}
