<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KapalTambat extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'kapal_tambat';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nama_perusahaan',
        'nama_kapal',
        'tanggal_masuk',
        'tanggal_keluar',
        'jam_masuk',
        'jam_keluar',
        'kegiatan',
        'tanggal_mulai_connect',
        'tanggal_selesai_connect',
        'lokasi',
        'security',
        'pos',
        'keterangan',
    ];
}
