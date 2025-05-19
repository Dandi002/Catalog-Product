<?php
namespace App\Http\Controllers;

use App\Models\Merk;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Merk = Merk::all();
        return view('admin-view/Merk.index', compact('Merk'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin-view/Merk.create');

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
            'nama_merk' => 'required|unique:merks',
        ]);

        $Merk = new Merk();
        $Merk->nama_merk = $request->nama_merk;

        $Merk->save();
        session()->flash('success', 'data berhasil disimpan');
        return redirect()->route('Merk.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Merk = Merk::findOrFail($id);
        return view('admin-view/Merk.show', compact('Merk'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Merk = Merk::findOrFail($id);
        return view('admin-view/Merk.edit', compact('Merk'));

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
            'nama_merk' => 'required|unique:merks',
        ]);

        $Merk = Merk::findOrFail($id);
        $Merk->nama_merk = $request->nama_merk;

        $Merk->save();
        session()->flash('success', 'data berhasil disimpan');
        return redirect()->route('Merk.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Merk = Merk::findOrFail($id);
        $Merk->delete();
        return redirect()->route('Merk.index');

    }
}
