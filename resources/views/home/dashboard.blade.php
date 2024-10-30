@extends('layouts.master')
@section('title','Dashboard')
@section('content')


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><td>{{ $totalBarangMasuk }}</td></h3>

                <p>Menu Data Barang Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/barangmasuk" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><td>{{ $totalBarangKeluar }}</td></h3>

                <p>Menu Data Barang Keluar</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/barangkeluar" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><td>{{ $totalSupplier }}</td></h3>

                <p>Menu Data Supplier</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/supplier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><td>{{ $totalBarang }}</td></h3>

                <p>Menu Data Barang</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/barang" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
    </section>

    <section class="content">
    <div class="row">
    <div class="col-lg-12 col-12">
      <div class="card">
        <div class="card-header">
          <h3>History Terakhir Dari Table <b>Barang Masuk</b></h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataBarangMasuk as $key => $value)
              <tr>
                <td>{{ $value->Barang->nama_barang }}</td>
                <td>{{ $value->Supplier->nama_supplier }}</td>
                <td>{{ $value->jumlah }}</td>
                <td>{{ $value->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </section>
    <section class="content">
    <div class="row">
    <div class="col-lg-12 col-12">
      <div class="card">
        <div class="card-header">
          <h3>History Terakhir Dari Table <b>Barang Keluar</b></h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($dataBarangKeluar as $key => $value)
              <tr>
                <td>{{ $value->Barang->nama_barang }}</td>
                <td>{{ $value->Supplier->nama_supplier }}</td>
                <td>{{ $value->jumlah }}</td>
                <td>{{ $value->created_at }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </section>

 
@endsection