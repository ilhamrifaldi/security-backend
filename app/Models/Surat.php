<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Surat extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'surat';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'status',
        'tanggal',
        'jam',
        'nama_pengirim',
        'nama_penerima',
        'jenis_surat',
        'security',
        'pos',
    ];

    public function suratPhoto () {
        return $this->hasMany(SuratPhoto::class, 'surat_id', 'id');
    }
}
