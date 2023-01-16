<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ItemPhoto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'item_photo';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'item_id',
        'foto_barang',
        'foto_do',
    ];
}
