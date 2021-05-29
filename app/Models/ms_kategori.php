<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_kategori extends Model
{
    use HasFactory;
    protected $table = 'ms_kategori';
    protected $primarykey = 'kode_kategori';
    protected $keyType = 'char';
     protected $fillable =[
        'kode_kategori',
        'nama_kategori'
     ];

}
