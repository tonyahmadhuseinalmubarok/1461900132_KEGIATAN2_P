<?php

namespace App\Http\Controllers;

use App\Models\ms_kategori;
use App\Models\ms_buku;
use App\Models\ms_peminjaman;
use Illuminate\Http\Request;

class ms_buku_controller extends Controller{
    public function index(){
        $term = "Tony";
        $ms_kategori = ms_kategori::all(); //select all
        $book = ms_kategori::join('ms_buku','ms_kategori.kode_kategori','=','ms_buku.kode_buku')->get(); //join saja
        $like = ms_kategori::where('nama_kategori','LIKE','%Tony%')->get();
        //
        return view('ms_kategori',[
            'ms_kategori' => $ms_kategori,
            'book'=>$book,
            'like' =>$like,
            //'joinlike' =>$joinlike
        ]);
    }
}
