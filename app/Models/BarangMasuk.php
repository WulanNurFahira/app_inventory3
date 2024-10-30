<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class BarangMasuk extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function barang() {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
    public function supplier() {
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
    public function index() {
        Log::info('Ini adalah pesan log');
        // Atau dengan data
        Log::info('Pesan log dengan data:', ['data' => $data]);
    }
}
