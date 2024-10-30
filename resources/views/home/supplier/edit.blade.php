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
                            <h3>Halaman Edit Data Supplier</h3>
                            <a class="btn btn-warning" href="/barang">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/{{$supplier->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                    <input
                                        type="string"
                                        class="form-control"
                                        name="nama_supplier"
                                        id="nama_supplier"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $supplier->nama_supplier}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input
                                        type="string"
                                        class="form-control"
                                        name="alamat"
                                        id="alamat"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $supplier->alamat}}"
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon</label>
                                    <input
                                        type="number"
                                        class="form-control"
                                        name="no_telp"
                                        id="no_telp"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $supplier->no_telp}}"
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