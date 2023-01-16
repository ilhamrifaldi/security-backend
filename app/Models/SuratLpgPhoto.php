<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratLpgPhoto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'surat_lpg_photo';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'tabung_lpg_id',
        'foto_surat',
    ]; 
}
