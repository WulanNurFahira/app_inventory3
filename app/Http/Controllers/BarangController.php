<?php

namespace App\Http\Controllers;
use illuminate\Support\Facedes\Storage;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Models\Jenis;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('home.barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jenis = Jenis::all();
        $barang =Barang::all();
        return view('home.barang.tambah',compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "gambar" => 'required|image|mimes:jpeg,jpg,png|max:5000',           
            "nama_barang" => 'required|min:3',           
            "id_jenis" => 'required|numeric',           
            "harga_beli" => 'required|numeric',           
            "harga_jual" => 'required|numeric',           
            "stok" => 'required|numeric',
        ]);

        $image = $request->file('gambar');
        $image->storeAs('public/products', $image->hashName());
        Barang::create([
            "gambar" => $image->hashName(),           
            "nama_barang" => $request->nama_barang,           
            "id_jenis" => $request->id_jenis,           
            "harga_beli" => $request->harga_beli,           
            "harga_jual" => $request->harga_jual,           
            "stok" => $request->stok           
        ]);
        return redirect('/barang')->with('succses', 'Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('home.barang.edit',[
            'barangs' => Barang::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Barang::where('id', $id)->update([
            "gambar" => $request->gambar,           
            "nama_barang" => $request->nama_barang,           
            "id_jenis" => $request->id_jenis,           
            "harga_beli" => $request->harga_beli,           
            "harga_jual" => $request->harga_jual,           
            "stok" => $request->stok
                       
        ]);
        return redirect('/barang')->with('succses', 'Data Berhasil Diedit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang=Barang::find($id);
        $barang->delete();

        return redirect('/barang')->with('succses', 'Data Berhasil Dihapus');
    }
}
