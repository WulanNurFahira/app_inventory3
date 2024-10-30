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
                            <h3>Halaman Edit Data Jenis</h3>
                            <a class="btn btn-warning" href="/jenis">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/jenis/{{$jenis->id}}/update" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="nama_jenis"
                                        id="nama_jenis"
                                        aria-describedby="helpId"
                                        placeholder=""
                                        value="{{ $jenis->nama_jenis}}"
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