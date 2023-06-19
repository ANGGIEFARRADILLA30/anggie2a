<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $guarded = ['id','created_at','upadated_at'];
    protected $fillable= ['penulis','id_kategori','judul','isi','gambar'];
    public function kategori()
    {
    return $this->hasOne(Kategori::class, 'id', 'id_kategori');
    }

}
