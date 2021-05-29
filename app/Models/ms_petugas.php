<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ms_petugas extends Model
{
    use HasFactory;
    protected $table = 'ms_petugas';
    protected $primarykey = 'kode_petugas';
    protected $keyType = 'char';
     protected $fillable =[
        'kode_petugas',
        'nama_petugas'
     ];
     
}
