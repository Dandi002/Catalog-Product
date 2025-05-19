<?php
namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Merk;
use App\Models\Produks;
use Illuminate\Http\Request;
use Storage;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produks::all();
        return view('-vadminiew/produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $merk = Merk::all();
        $kategori = kategori::all();
        return view('admin-view/produk.create', compact('merk', 'kategori'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'harga' => 'required|numeric',
            'foto' => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
            'nama_tas' => 'required',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_kategori' => 'required',
        ]);

        $produk = new Produks;
        $produk->harga = $request->harga;
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 999) . $img->getClientOriginalName();
            $img->move('Storage/foto', $name);
            $produk->foto = $name;
        }

        $produk->nama_tas = $request->nama_tas;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_merk = $request->id_merk;
        $produk->id_kategori = $request->id_kategori;

        $produk->save();

        session()->flash('success', 'Data Berhasil Ditambahkan');

        return redirect()->route('Produks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = produks::findOrFail($id);
        $merk = Merk::all();
        $kategori = kategori::all();

        return view('admin-view/produk.show', compact('produk', 'merk', 'kategori'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produks::findOrFail($id);
        $merk = Merk::all();
        $kategori = kategori::all();
        return view('admin-view/produk.edit', compact('produk', 'merk', 'kategori'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'harga' => 'required|numeric',
            'foto' => 'required|mimes:jpg,png,jpeg,webp,avif|max:9999',
            'nama_tas' => 'required',
            'deskripsi' => 'required',
            'id_merk' => 'required',
            'id_kategori' => 'required',
        ]);

        $produk = Produks::findOrfail($id);
        $produk->harga = $request->harga;
        if ($request->hasFile('foto')) {
            $img = $request->file('foto');
            $name = rand(1000, 999) . $img->getClientOriginalName();
            $img->move('Storage/foto', $name);
            $produk->foto = $name;
        }
        $produk->nama_tas = $request->nama_tas;
        $produk->deskripsi = $request->deskripsi;
        $produk->id_merk = $request->id_merk;
        $produk->id_kategori = $request->id_kategori;

        $produk->save();
        session()->flash('success', 'Data Berhasil Diubah');
        return redirect()->route('Produks.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produks::findOrfail($id);
        $produk->delete();
        return redirect()->route('Produks.index')->with('success', 'Data Berhasil Dihapus');

    }
}
