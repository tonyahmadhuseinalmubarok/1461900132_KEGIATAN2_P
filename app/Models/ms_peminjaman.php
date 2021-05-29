<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_peminjaman extends Model
{
    use HasFactory;
    protected $table = 'ms_peminjaman';
    protected $primarykey = 'kode_peminjaman';
    protected $keyType = 'char';
     protected $fillable =[
        'kode_peminjaman',
        'kode_petugas',
        'kode_peminjam',
        'tgl_pembuatan',
        'tgl_kembali'
     ];
}
