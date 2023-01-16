<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\ItemPhoto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ItemPhotoController extends Controller
{
    public function imageStore (Request $request) {
        $this->validate($request, [
            'foto_barang' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'foto_do' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path_foto_barang = $request->file('foto_barang')->store('foto_barang', 'public');
        $image_path_foto_do = $request->file('foto_do')->store('foto_do', 'public');

        $data = ItemPhoto::create([
            'foto_barang' => $image_path_foto_barang,
            'foto_do' => $image_path_foto_do,
        ]);

        return response($data, Response::HTTP_CREATED);
    }
}
