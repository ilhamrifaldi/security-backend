<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratFuelPhoto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'surat_fuel_photo';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'truk_tangki_id',
        'foto_surat',
    ]; 
}
