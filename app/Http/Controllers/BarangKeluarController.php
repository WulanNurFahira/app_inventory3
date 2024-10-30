<?php

namespace App\Http\Controllers;
use App\Models\BarangKeluar;
use App\Models\Barang;
use Illuminate\Http\Request;

class BarangkeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangkeluar = BarangKeluar::all();
        return view('home.barangkeluar.index', compact('barangkeluar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('home.barangkeluar.tambah', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function show(string $id)
    {
        $barangkeluar = Barangkeluar::find($id);
        return view('home.barangkeluar.show', compact('barangkeluar'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'id_barang' => 'required',
            'nama_customer' => 'required',
            'jumlah' => 'required|numeric',
        ]);

        $id = $request->id_barang;
        $barang = Barang::find($id);

        if ($barang->stok < $request->jumlah) {
            return redirect('/barang_keluar')->with('error', 'Stok barang tidak mencukupi !!');
        }

        $barang->decrement('stok', $request->jumlah);
        Barangkeluar::create([           
            'id_barang' => $request->id_barang,                      
            'nama_customer' => $request->nama_customer,                      
            'jumlah' => $request->jumlah           
        ]);
        return redirect('/barang')->with('succses', 'Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
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
        barangkeluar::where('id', $id)->update([
            "id_barang" => $request->id_barang,                      
            "nama_customer" => $request->nama_customer,                      
            "jumlah" => $request->jumlah
        ]);
        return redirect('/barangkeluar')->with('succses', 'Data Berhasil Diedit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barangkeluar=Barangkeluar::find($id);
        $barangkeluar->delete();

        return redirect('/barangkeluar')->with('succses', 'Data Berhasil Dihapus');
    }

    public function cetak()
    {
        $barangkeluar = BarangKeluar::all();
        return view('home.barangkeluar.cetak', compact('barangkeluar'));
    }
    public function struk(string $id)
    {
        $barangkeluar = BarangKeluar::find($id);
        return view('home.barangkeluar.struk', compact('barangkeluar'));
    }
}
