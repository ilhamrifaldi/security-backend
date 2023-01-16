<?php

namespace App\Http\Controllers\API;

use App\Models\TrukTangki;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TrukTangkiController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nomor_surat_jalan = $request->input('nomor_surat_jalan');
        $nomor_kendaraan = $request->input('nomor_kendaraan');
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $tujuan = $request->input('tujuan');
        $quantity = $request->input('quantity');
        $driver = $request->input('driver');
        $security = $request->input('security');
        $pos = $request->input('pos');

        if($id) {
            $trukTangki = TrukTangki::with(['trukTangkiPhoto'])->find($id);

            if($trukTangki) {
                return ResponseFormatter::success(
                    $trukTangki, 
                    'Data Truk Tangki Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }

        $trukTangki = TrukTangki::with(['trukTangkiPhoto']);

        if($nomor_surat_jalan) {
            $trukTangki->where('nomor_surat_jalan', 'like', '%' . $nomor_surat_jalan . '%');
        }

        if($nomor_kendaraan) {
            $trukTangki->where('nomor_kendaraan', 'like', '%' . $nomor_kendaraan . '%');
        }

        if($tanggal) {
            $trukTangki->where('tanggal', 'like', '%' . $tanggal . '%');
        }

        if($jam) {
            $trukTangki->where('jam', 'like', '%' . $jam . '%');
        }

        if($tujuan) {
            $trukTangki->where('tujuan', 'like', '%' . $tujuan . '%');
        }

        if($quantity) {
            $trukTangki->where('quantity', 'like', '%' . $quantity . '%');
        }

        if($driver) {
            $trukTangki->where('driver', 'like', '%' . $driver . '%');
        }

        if($security) {
            $trukTangki->where('security$security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $trukTangki->where('pos', 'like', '%' . $pos . '%');
        }

        return ResponseFormatter::success(
            $trukTangki->paginate($limit), 
            'Data Truk Tangki Success'
        );
    }
}
