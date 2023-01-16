<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\BunkerWater;
use Illuminate\Http\Request;

class BunkerWaterController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nomor_po = $request->input('nomor_po');
        $nama_kapal = $request->input('nama_kapal');
        $tanggal_mulai = $request->input('tanggal_mulai');
        $tanggal_selesai = $request->input('tanggal_selesai');
        $jam_mulai = $request->input('jam_mulai');
        $jam_selesai = $request->input('jam_selesai');
        $quantity = $request->input('quantity');
        $nomor_invoice = $request->input('nomor_invoice');
        $security = $request->input('security');
        $pos = $request->input('pos');
        $keterangan = $request->input('keterangan');

        if($id) {
            $bunkerWater = BunkerWater::find($id);

            if($bunkerWater) {
                return ResponseFormatter::success(
                    $bunkerWater, 
                    'Data Bunker Water Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }

        $bunkerWater = BunkerWater::query();

        if($nomor_po) {
            $bunkerWater->where('nmor$nomor_po', 'like', '%' . $nomor_po . '%');
        }

        if($nama_kapal) {
            $bunkerWater->where('nama_kapal', 'like', '%' . $nama_kapal . '%');
        }

        if($tanggal_mulai) {
            $bunkerWater->where('tanggal_mulai', 'like', '%' . $tanggal_mulai . '%');
        }

        if($tanggal_selesai) {
            $bunkerWater->where('tanggal_sele$tanggal_selesai', 'like', '%' . $tanggal_selesai . '%');
        }

        if($jam_mulai) {
            $bunkerWater->where('jam_mulai', 'like', '%' . $jam_mulai . '%');
        }

        if($jam_selesai) {
            $bunkerWater->where('jam_selesai', 'like', '%' . $jam_selesai . '%');
        }

        if($quantity) {
            $bunkerWater->where('quantity', 'like', '%' . $quantity . '%');
        }

        if($nomor_invoice) {
            $bunkerWater->where('nomor$nomor_invoice', 'like', '%' . $nomor_invoice . '%');
        }

        if($security) {
            $bunkerWater->where('security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $bunkerWater->where('pos', 'like', '%' . $pos . '%');
        }

        if($keterangan) {
            $bunkerWater->where('keterangan', 'like', '%' . $keterangan . '%');
        }

        return ResponseFormatter::success(
            $bunkerWater->paginate($limit), 
            'Data Bunker Water Success'
        );
    }
}
