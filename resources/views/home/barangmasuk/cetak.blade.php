<!DOCTYPE html>
<html>
<head>
    <title>Cetak Barang Masuk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body onload="window.print()">
    <center><h1>Data Barang Masuk</h1></center>
    <center><h3>Kwon Power Store</h3></center>
    <br>
    <br>
    <table class="table table-light table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah</th>
                <th>Tanggal Masuk</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barangmasuk as $barangmasuk)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $barangmasuk->barang->nama_barang }}</td>
                <td>{{ $barangmasuk->supplier->nama_supplier }}</td>
                <td>{{ $barangmasuk->jumlah }}</td>
                <td>{{ $barangmasuk->created_at->format('d-m-Y | H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
