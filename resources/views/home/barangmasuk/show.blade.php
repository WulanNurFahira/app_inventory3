@extends('layouts.master')
@section('title','Dashboard')
@section('content')

<center><div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <center><h1>TAEKWONDO STORE</h1>
            <center><h1>Detail Produk {{ $barangmasuk->barang->nama_barang }}</h1></center>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Taekwondo Store</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img src="{{ asset('/storage/products/'.$barangmasuk->barang->gambar) }}"
                class="rounded" style="width: 150px">
                </div>

                <h1 class="profile-username text-center">{{$barangmasuk->barang->nama_barang}}</h1>

                <p class="text-muted text-center">Taekwondo Store</p>

                <ul class="list-group list-group-unbordered mb-12">
                  <li class="list-group-item">
                    <b>Jumlah Stok</b> <h3 class="profile-username text-center">{{$barangmasuk->barang->stok}}</h3>
                  </li>
                  <li class="list-group-item">
                    <b>Nama Supplier</b> <h3 class="profile-username text-center">{{$barangmasuk->supplier->nama_supplier}}</h3>
                  </li>
                  
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>SELAMAT BELANJA:)</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              
                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Jln Sadang Rt 04 RW 09 No 26</p>
                <p class="text-muted">Kecamatan Margahayu</p>
                <p class="text-muted">Kabupaten Bandung</p>
                <p class="text-muted">@wlnrfh4__</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Perlengkapan yang harus dipunya</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Head Guard</span>
                  <span class="tag tag-success">P3K</span>
                  <span class="tag tag-info">Dobok Poomsae</span>
                  <span class="tag tag-warning">Foot Wrapper</span>
                  <span class="tag tag-primary">Samsak</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">{{$barangmasuk->barang->nama_barang}}Adalah Sebuah Perlengkapan wajib yang harus dimiliki oleh Atlet TAEKWONDO Poomsae maupun Kyourugi, Perlengkapan yang harus siap sedia disaat atlet sedang bertanding</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div></center></center>
          
@endsection