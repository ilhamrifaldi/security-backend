<?php

namespace App\Http\Controllers\API;

use App\Models\TabungLpg;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TabungLpgController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nomor_surat_jalan = $request->input('nomor_surat_jalan');
        $nomor_kendaraan = $request->input('nomor_kendaraan');
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $tujuan = $request->input('tujuan');
        $jumlah_tabung = $request->input('jumlah_tabung');
        $security = $request->input('security');
        $pos = $request->input('pos');

        if($id) {
            $tabungLpg = TabungLpg::with(['suratLpgPhoto'])->find($id);

            if($tabungLpg) {
                return ResponseFormatter::success(
                    $tabungLpg, 
                    'Data Tabung LPG Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }

        $tabungLpg = TabungLpg::with(['suratLpgPhoto']);

        if($nomor_surat_jalan) {
            $tabungLpg->where('nomor_surat_jalan', 'like', '%' . $nomor_surat_jalan . '%');
        }

        if($nomor_kendaraan) {
            $tabungLpg->where('nomor_kendaraan', 'like', '%' . $nomor_kendaraan . '%');
        }

        if($tanggal) {
            $tabungLpg->where('tanggal', 'like', '%' . $tanggal . '%');
        }

        if($jam) {
            $tabungLpg->where('jam', 'like', '%' . $jam . '%');
        }

        if($tujuan) {
            $tabungLpg->where('tujuan', 'like', '%' . $tujuan . '%');
        }

        if($jumlah_tabung) {
            $tabungLpg->where('jumlah_tabung', 'like', '%' . $jumlah_tabung . '%');
        }

        if($security) {
            $tabungLpg->where('security$security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $tabungLpg->where('pos', 'like', '%' . $pos . '%');
        }

        return ResponseFormatter::success(
            $tabungLpg->paginate($limit), 
            'Data Tabung LPG Success'
        );
    }
}
