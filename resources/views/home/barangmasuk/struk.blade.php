<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Barang Masuk</title>
    <style>
        hr {
            margin-left: 1px;
            width: 450px;
        }
    </style>
</head>
<body onload="window.print()">
<h3>Kwon Power Store</h3>
        <h2>Struk Pembayaran Barang Masuk</h2>
        <hr>
        <table>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><?php echo date("d-m-Y") ?></td>
        </tr>
        </table>
        <hr>
        <table>
                <tr>
                    <td><b>Nama Barang</b></td>
                    <td>:</td>
                    <td>{{$barangmasuk->barang->nama_barang}}</td>
                </tr>
                <tr>
                    <td><b>Nama Supplier</b></td>
                    <td>:</td>
                    <td>{{$barangmasuk->supplier->nama_supplier}}</td>
                </tr>
                <tr>
                    <td><b>Jumlah</b></td>
                    <td>:</td>
                    <td>{{$barangmasuk->jumlah}}</td>
                </tr>
                <tr>
                    <td><b>Detail Tanggal</b></td>
                    <td>:</td>
                    <td>{{ $barangmasuk->created_at->format('d-m-Y | H:i') }}</td>
                </tr>
        </table>
        <hr>
        <p>Note</p>
        <h3>- Struk Ini Sebagai Bukti pembayaran <br> 
            - Harap Simpan Dengan Baik
        </h3>
</body>
</html>