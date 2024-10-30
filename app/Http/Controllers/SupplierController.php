<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('home.supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('home.supplier.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Supplier::create([
            "nama_supplier" => $request->nama_supplier,
            "alamat" => $request->alamat,
            "no_telp" => $request->no_telp

        ]);
        return redirect('/supplier')->with('succses', 'Data Berhasil Ditambahkan');;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('home.supplier.edit',[
            'supplier' => Supplier::find($id)
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
        Supplier::where('id', $id)->update([
            "nama_supplier" => $request->nama_supplier,           
            "alamat" => $request->alamat,           
            "no_telp" => $request->no_telp,           
            
                       
        ]);
        return redirect('/supplier')->with('succses', 'Data Berhasil Diedit');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier=Supplier::find($id);
        $supplier->delete();

        return redirect('/supplier')->with('succses', 'Data Berhasil Dihapus');
    }
}
