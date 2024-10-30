<!DOCTYPE html>
<html>
<head>
    <title>Cetak Barang Keluar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body onload="window.print()">
    <center><h1>Data Barang Keluar</h1></center>
    <center><h3>Kwon Power Store</h3></center>
    <br>
    <br>
    <table class="table table-light table-hover">
        <thead>
        <tr>
                                        <th scope="col">ID Barang</th>
                                        <th scope="col">Nama Customer</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                    @foreach($barangkeluar as $barangkeluar)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $barangkeluar->barang->nama_barang }}</td>
                                        <td>{{ $barangkeluar->jumlah }}</td>
                                        
                                    </tr>
                                    @endforeach
        </tbody>
    </table>
</body>
</html>
