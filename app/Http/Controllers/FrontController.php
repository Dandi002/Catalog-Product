<?php

namespace App\Http\Controllers;
use App\Models\Produks;
use App\Models\Merk;
use App\Models\Kategori;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $produk = Produks::all();
        $merk = Merk::all();
        $kategori = Kategori::all();
        return view('welcome', compact('produk','merk','kategori'));
    }
}
