@extends('layouts.master')
@section('title','Dashboard')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Barang Masuk</h3>
                            <h3>Kwon Power Store</h3>
                            <a class="btn btn-primary" href="/barang">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/barangmasuk/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_barang" class="form-label">ID Barang</label>
                                    <select name="id_barang" id="">
                                        <option value="">Pilih Barang</option>
                                    @foreach($barang as $barang)
                                        <option value="{{$barang->id}}">{{$barang->nama_barang}}</option>
                                    @endforeach
                                    </select>
                                    
                                </div>
                                <div class="card-body">
                            <form action="/barangmasuk/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_supplier" class="form-label">ID Supplier</label>
                                    <select name="id_supplier" id="">
                                        <option value="">Pilih Supplier</option>
                                    @foreach($supplier as $supplier)
                                        <option value="{{$supplier->id}}">{{$supplier->nama_supplier}}</option>
                                    @endforeach
                                    </select>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="jumlah"
                                        id="jumlah"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                    
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection