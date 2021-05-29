<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_penerbit extends Model
{
    use HasFactory;
    protected $table = 'ms_penerbit';
    protected $primarykey = 'kode_penerbit';
    protected $keyType = 'char';
     protected $fillable =[
        'kode_penerbit',
        'nama_penerbit',
        'alamat_penerbit',
        'telp_penerbit'
     ];
}
