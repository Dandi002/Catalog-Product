<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    protected $fillable = ['id', 'nama_merk'];
    use HasFactory;
     public function Produk()
    {
        return $this->hasMany(Produks::class);
    }
}
