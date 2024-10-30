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
                            <h3>Halaman Data Supplier</h3>
                            <a class="btn btn-primary" href="/supplier/tambah">Tambah Data (+)</a>
                        </div>
                        <div class="card-body">
                        <table class="table table-bordered table-striped"  id="datatable">
                                <thead>
                                    <tr>
                                    <th scope="col">Id</th>
                                        <th scope="col">Nama Supplier</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">No Telepon</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                    @foreach($supplier as $supplier)
                                    <tr>
                                        
                                        <td>{{ $supplier->id }}</td>
                                        <td>{{ $supplier->nama_supplier }}</td>
                                        <td>{{ $supplier->alamat }}</td>
                                        <td>{{ $supplier->no_telp }}</td>
                                        <td><a class="btn btn-warning" href="/supplier/{{$supplier->id}}/show">Edit</a>
                                            <a class="btn btn-danger" href="/supplier/{{$supplier->id}}/delete"
                                            onclick="return confirm('yakin kau ni, ingin hapus?')">Delete</a> </td>
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