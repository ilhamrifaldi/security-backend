<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'item';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'status',
        'nomor_do',
        'tanggal',
        'jam',
        'nama_pembawa_barang',
        'nama_pemilik_barang',
        'security',
        'pos',
        'list_barang',
    ];

    public function itemPhotos () {
        return $this->hasMany(ItemPhoto::class, 'item_id', 'id');
    }
}
