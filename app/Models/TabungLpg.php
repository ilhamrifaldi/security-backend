<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TabungLpg extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'tabung_lpg';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nomor_surat_jalan',
        'nomor_kendaraan',
        'tanggal',
        'jam',
        'tujuan',
        'jumlah_tabung',
        'security',
        'pos',
    ];

    public function suratLpgPhoto () {
        return $this->hasMany(SuratLpgPhoto::class, 'tabung_lpg_id', 'id');
    }
}
