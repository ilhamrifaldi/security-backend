<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrukTangki extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'truk_tangki';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tanggal',
        'jam',
        'nomor_kendaraan',
        'nomor_surat_jalan',
        'tujuan',
        'driver',
        'quantity',
        'security',
        'pos',
    ];

    public function suratFuelPhoto () {
        return $this->hasMany(SuratFuelPhoto::class, 'truk_tangki_id', 'id');
    }
}
