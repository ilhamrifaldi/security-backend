<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BunkerWater extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'bunker_water';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nomor_po_wo',
        'nama_kapal',
        'tanggal_mulai',
        'tanggal_selesai',
        'jam_mulai',
        'jam_selesai',
        'quantity',
        'security',
        'pos',
        'nomor_invoice',
        'keterangan',
    ];
}
