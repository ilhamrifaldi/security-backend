<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\SuratLpgPhoto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuratLpgPhotoController extends Controller
{
    public function imageStore (Request $request) {
        $this->validate($request, [
            'foto_surat' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image_path_foto_surat = $request->file('foto_surat')->store('foto_surat', 'public');

        $data = SuratLpgPhoto::create([
            'foto_surat' => $image_path_foto_surat,
        ]);

        return response($data, Response::HTTP_CREATED);
    }
}
