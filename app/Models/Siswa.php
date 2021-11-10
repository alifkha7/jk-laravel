<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $primaryKey = 'nis';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    protected $fillable = [
        'nis',
        'nama',
        'jk',
        'alamat',
        'tmp_lahir',
        'tgl_lahir',
        'telepon',
        'id_jurusan',
        'nilai'
    ];
}