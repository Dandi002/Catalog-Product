<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produks extends Model
{
     protected $fillable = ['id', 'harga', 'foto','nama_tas','deskripsi','id_merk','id_kategori'];
    use HasFactory;

     public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk');
    }
     public function kategori()
    {
        return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
