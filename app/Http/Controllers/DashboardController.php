<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\BarangKeluar;
use App\Models\BarangMasuk;
use App\Models\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalBarangMasuk = BarangMasuk::sum('jumlah');
        $totalBarangKeluar = BarangKeluar::sum('jumlah');
        $totalSupplier = Supplier::sum('id');

        $dataBarangMasuk = BarangMasuk::with('Barang', 'Supplier') ->get();
        $dataBarangKeluar = BarangKeluar::with('Barang')->get();

        return view('home.dashboard', compact('totalBarang', 'totalBarangMasuk', 'totalBarangKeluar', 'totalSupplier', 'dataBarangMasuk', 'dataBarangKeluar'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {

    }
    public function show(string $id)
    {
        
    }
    public function edit(string $id)
    {

    }
    public function update(Request $request, string $id)
    {

    }
    public function destroy(string $id)
    {

    }
}
