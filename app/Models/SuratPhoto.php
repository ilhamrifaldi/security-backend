<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuratPhoto extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'surat_photo';


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'surat_id',
        'foto_surat',
    ]; 
}
