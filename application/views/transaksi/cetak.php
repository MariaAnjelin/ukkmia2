<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }

        hr {
            border: 0;
            border-top: 4px solid #aebaf8;
        }

        .table {
            border: 0;
            border-collapse: collapse;
        }

        th {
            font-family: sans-serif;
            font-size: 12px;
            background: lightblue;
        }
    </style>
</head>

<body>
    <hr><br>
    
    <table width="710" class="table">
        <tr>
            <th class="text-center">Id Member</th>
            <th class="text-center">Tanggal Masuk</th>
            <th class="text-center">Nama Member</th>
            <th class="text-center">Total Bayar</th>
            <th class="text-center">Status Pembayaran</th>
            <th class="text-center">Tanggal Ambil</th>
        </tr>

        <tr>
            <td class="table"><?= $transaksi['id_member'] ?></td>
            <td class="table"><?= $transaksi['tgl'] ?></td>
            <td class="table"><?= $transaksi['nama'] ?></td>
            <td class="table"><?= "Rp. " . number_format($transaksi['total_bayar']) ?></td>
            <td class="table"><?= $transaksi['dibayar'] ?></td>
            <td class="table"><?= $transaksi['tgl_bayar'] ?></td>
        </tr>
    </table><br>

    <table>
        <tr>
            <td><strong>Keterangan</strong></td>
        </tr>

        <tr>
            <td>
                <p>1. Pengambilan barang harus disertai nota</p>
                <p>2. Klaim berlaku sejak 24 jam setelah barang diambil</p>
                <p>3. Kami tidak bertanggung jawab apabila barang luntur karena sifat bahannya</p>
                <p>4. Kami tidak bertanggung jawab apabila cucian dalam 1 bulan tidak diambil hilang atau rusak</p>
                <p>5. Cucian yang rusak/mengkerut karena sifat kain tidak dapat kami ganti</p>
            </td>
        </tr>
    </table><br>

    <table>
        <td>
            <p>
                Terimakasih karena telah memperceyakan toko kami, semoga datang kembali:)
            </p>
        </td>
    </table>

</body>

</html>
<script>
    window.print();
</script>