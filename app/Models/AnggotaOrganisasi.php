<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaOrganisasi extends Model
{
    use HasFactory;
    protected $table = 'anggota_organisasi';
    protected $fillable = ['nama', 'jabatan', 'images'];
}
