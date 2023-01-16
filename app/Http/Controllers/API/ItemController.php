<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function all (Request $request) {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $status = $request->input('status');
        $nomor_do = $request->input('nomor_do');
        $tanggal = $request->input('tanggal');
        $jam = $request->input('jam');
        $nama_pembawa_barang = $request->input('nama_pembawa_barang');
        $nama_pemilik_barang = $request->input('nama_pemilik_barang');
        $security = $request->input('security');
        $pos = $request->input('pos');
        $list_barang = $request->input('list_barang');

        if($id) {
            $item = Item::with(['itemPhotos'])->find($id);

            if($item) {
                return ResponseFormatter::success(
                    $item, 
                    'Data Item Success'
                );
            } else {
                return ResponseFormatter::error(
                    null, 
                    'No Data',
                    404
                );
            }
        }
        $item = Item::with(['itemPhotos']);

        if($status) {
            $item->where('status', $status);
        }

        if($nomor_do) {
            $item->where('nomor_do', 'like', '%' . $nomor_do . '%');
        }

        if($tanggal) {
            $item->where('tanggal', 'like', '%' . $tanggal . '%');
        }

        if($jam) {
            $item->where('jam', 'like', '%' . $jam . '%');
        }

        if($nama_pembawa_barang) {
            $item->where('nama_pembawa_barang', 'like', '%' . $nama_pembawa_barang . '%');
        }

        if($nama_pemilik_barang) {
            $item->where('nama_pemilik_barang', 'like', '%' . $nama_pemilik_barang . '%');
        }

        if($security) {
            $item->where('security', 'like', '%' . $security . '%');
        }

        if($pos) {
            $item->where('pos', 'like', '%' . $pos . '%');
        }

        if($list_barang) {
            $item->where('list_barang', 'like', '%' . $list_barang . '%');
        }

        return ResponseFormatter::success(
            $item->paginate($limit), 
            'Data Item Success'
        );
    }

    public function store() {
        
    }
}
