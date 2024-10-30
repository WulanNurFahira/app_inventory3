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
                            <h3>Halaman Data Barang Keluar</h3>
                            <a class="btn btn-primary" href="/barangkeluar/tambah">Tambah Data (+)</a>
                            <a class="btn btn-success" href="/barangkeluar/cetak">Print</a>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped" id="datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Nama Customer</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Detail</th>
                                    </tr>
                                </thead>
                                    @foreach($barangkeluar as $barangkeluar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $barangkeluar->nama_customer }}</td>
                                        <td>{{ $barangkeluar->jumlah }}</td>
                                        <td><a class="btn btn-secondary" href="/barangkeluar/{{$barangkeluar->id}}/show">Detail</a>
                                        <a class="btn btn-success" href="/barangkeluar/{{$barangkeluar->id}}/struk">Struk</a>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if(session('succses'))
    <script>
        Swal.fire({
        title: "Good job!",
        text: "{{session('succses')}}",
        icon: "success"
        });
    </script>
    @endif
</div>



@endsection