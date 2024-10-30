<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran Barang Keluar</title>
    <style>
        hr {
            margin-left: 1px;
            width: 450px;
        }
    </style>
</head>
<body onload="window.print()">
        <h2>Struk Pembayaran Barang Keluar</h2>
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
                    <td><b>Nama Customer</b></td>
                    <td>:</td>
                    <td>{{$barangkeluar->nama_customer}}</td>
                </tr>
                <tr>
                    <td><b>Jumlah</b></td>
                    <td>:</td>
                    <td>{{$barangkeluar->jumlah}}</td>
                </tr>
                <tr>
                    <td><b>Detail Tanggal</b></td>
                    <td>:</td>
                    <td>{{ $barangkeluar->created_at->format('d-m-Y | H:i') }}</td>
                </tr>
        </table>
        <hr>
        <p>Note</p>
        <h3>- Struk Ini Sebagai Bukti pembayaran <br> 
            - Harap Simpan Dengan Baik
        </h3>
</body>
</html>