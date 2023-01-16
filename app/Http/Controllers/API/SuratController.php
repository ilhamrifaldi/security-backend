<?php

namespace App\Http\Controllers\API;

use App\Models\Surat;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class SuratController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $status = $request->input('status');
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $nama_pengirim = $request->input('nama_pengirim');
        $nama_penerima = $request->input('nama_penerima');
        $jenis_surat = $request->input('jenis_surat');
        $security = $request->input('security');
        $pos = $request->input('pos');

        if($id) {
            $surat = Surat::with(['suratPhoto'])->find($id);

            if($surat) {
                return ResponseFormatter::success(
                    $surat, 
                    'Data Surat Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }

        $surat = Surat::with(['itemPhotos']);

        if($status) {
            $surat->where('status', $status);
        }

        if($tanggal) {
            $surat->where('tanggal', 'like', '%' . $tanggal . '%');
        }

        if($jam) {
            $surat->where('jam', 'like', '%' . $jam . '%');
        }

        if($nama_pengirim) {
            $surat->where('nama_pengirim', 'like', '%' . $nama_pengirim . '%');
        }

        if($nama_penerima) {
            $surat->where('nama_penerima', 'like', '%' . $nama_penerima . '%');
        }

        if($jenis_surat) {
            $surat->where('jenis_surat', 'like', '%' . $jenis_surat . '%');
        }

        if($security) {
            $surat->where('seu$security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $surat->where('pos', 'like', '%' . $pos . '%');
        }

        return ResponseFormatter::success(
            $surat->paginate($limit), 
            'Data Surat Success'
        );
    }
}
