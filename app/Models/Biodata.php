<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;
    protected $fillable=['nama_mhs','tgl_lahir','alamat', 'agama', 'universitas','fakultas','prodi','nim_mhs'];
}
