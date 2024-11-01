@extends('layouts.master')
@section('title','barang')
@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah Data Barang</h3>
                            <a class="btn btn-primary" href="/barang">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/barang/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="gambar" class="form-label">Gambar</label>
                                    <input
                                        type="file"
                                        class="form-control"
                                        name="gambar"
                                        id="gambar"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    @error('gambar')
                                    <div class="allert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="id_jenis" class="form-label">ID Jenis</label>
                                    <select name="id_jenis" id="">
                                        @foreach($jenis as $jenis)
                                        <option value="{{$jenis->id}}">{{$jenis->nama_jenis}}</option>
                                        @endforeach
                                    </select>
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