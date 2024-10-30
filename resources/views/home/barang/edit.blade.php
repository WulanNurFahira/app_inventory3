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
                            <h3>Halaman Edit Data Barang</h3>
                            <a class="btn btn-warning" href="/barang">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/barang/{{$barangs->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->gambar}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="nama_barang" class="form-label">Nama Barang</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_barang"
                                        id="nama_barang"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->nama_barang}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="id_jenis" class="form-label">ID Jenis</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="id_jenis"
                                        id="id_jenis"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->id_jenis}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="harga_beli" class="form-label">Harga Beli</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="harga_beli"
                                        id="harga_beli"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->harga_beli}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="harga_jual" class="form-label">Harga Jual</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="harga_jual"
                                        id="harga_jual"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->harga_jual}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="stok" class="form-label">Stok</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="stok"
                                        id="stok"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $barangs->stok}}"
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