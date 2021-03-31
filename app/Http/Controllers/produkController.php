<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller
{
    public function index()
    {
        $data_produk = \App\Models\produk::all();
        return view('produk.index', ['data_produk' => $data_produk]);
    }
    public function create(Request $request)
    {
        \App\Models\produk::create($request->all());
        return redirect('/produk')->with('sukses', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $produk = \App\Models\produk::find($id);
        return view('produk/edit', ['produk' => $produk]);
    }
    public function update(Request $request, $id)
    {
        $produk = \App\Models\produk::find($id);
        $produk->update($request->all());
        return redirect('/produk')->with('sukses', 'Data berhasil diupdate');
    }
    public function delete($id)
    {
        $produk = \App\Models\produk::find($id);
        $produk->delete($produk);
        return redirect('/produk')->with('sukses', 'Data berhasil dihapus');
    }
}
