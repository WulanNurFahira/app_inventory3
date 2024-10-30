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
                            <h3>Halaman Tambah Data Supplier</h3>
                            <a class="btn btn-primary" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/supplier/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_supplier" class="form-label">Nama Supplier</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_supplier"
                                        id="nama_supplier"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <input
                                        type="alamat"
                                        class="form-control"
                                        name="alamat"
                                        id="alamat"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                  
                                <div class="mb-3">
                                    <label for="no_telp" class="form-label">No Telepon</label>
                                    <input
                                        type="no_telp"
                                        class="form-control"
                                        name="no_telp"
                                        id="no_telp"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    
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