<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_peminjam extends Model
{
    use HasFactory;
    protected $table = 'ms_peminjam';
    protected $primarykey = 'kode_peminjam';
    protected $keyType = 'char';
     protected $fillable =[
        'kode_peminjam',
        'nama_peminjam',
        'alamat_peminjam',
        'telp_peminjam'
     ];
}
