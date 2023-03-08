<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <style>
        td {
            font-size: 12px;
            font-family: sans-serif;
        }

        h3 {
            font-size: 16px;
        }

        /* hr {
            border: 0;
            border-top: 2px solid #AEBAF8;
        } */

        .tabel {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            font-size: 14px;
            font-family: sans-serif;
            background: lightblue;
        }

        table tr tr {
            font-size: 13;
        }
    </style>
</head>

<body>

    <center>
        <table>
            <tr>
                <td><img src="<?= base_url('assets/img/profile/icons.jpeg') ?>" width="90" height="90"></td>
                <td>
                    <center>
                        <font size="3">STRUK LAPORAN</font>
                    </center><br> 
                    <center>
                        <font size="5"><b>MARIA'S LAUNDRY</b></font>
                    </center><br>
                    <center>
                        <font size="2">
                            <i>
                                <b>
                                    Jl. Beteng Sidomekar, Semboro, Jember Jawa Timur
                                    Email : anjelin2702@gmail.com <br>
                                    Telp. 081220210618
                                </b>
                            </i>
                        </font>
                    </center>
                </td>
            <tr>
                <td colspan="2">
                    <hr>
                </td>
            </tr>
            </tr>
        </table><br><br>

        <table width="700" class="tabel">
            <tr>
                <th class="tabel text-center">No</th>
                <th class="tabel text-center">Tanggal</th>
                <th class="tabel text-center">Nama Paket</th>
                <th class="tabel text-center">Outlet</th>
                <th class="tabel text-center">Harga</th>
                <th class="tabel text-center">Jumlah</th>
                <th class="tabel text-center">Total</th>
                <th class="tabel text-center">Status Pembayaran</th>
                <th class="tabel text-center">Pendapatan</th>
            </tr>

            <?php $index = 1; foreach ($laporan as $row) : ?>

                <tr>
                    <td class="tabel"><?php echo $index++ ?></td>
                    <td class="tabel"><?php echo $row['tgl'] ?></td>
                    <td class="tabel"><?php echo $row['nama_paket'] ?></td>
                    <td class="tabel"><?php echo $row['nama_outlet'] ?></td>
                    <td class="tabel"><?php echo "Rp. " . number_format($row['harga'], 0, '.', '.') ?></td>
                    <td class="tabel"><?php echo $row['jumlah'] ?></td>
                    <td class="tabel"><?php echo "Rp. " . number_format($row['total'], 0, '.', '.') ?></td>
                    <td class="tabel"><?php echo $row['dibayar'] ?></td>
                    <td class="tabel">
                        <?php if ($row['dibayar'] == "Dibayar") { ?>
                            <?php echo "Rp. " . number_format($row['total'], 0, '.', '.') ?>
                        <?php } else { ?>
                            <?php echo "Rp. " . number_format($row['harga'] * 0, 0, '.', '.') ?>
                        <?php  } ?>
                    </td>
                </tr>
            <?php endforeach ?>

            <tr>
                <th class="tabel text-center" colspan="8">Total Semua Pendapatan</th>
                <td>
                    
                </td>
            </tr>

        </table><br>


    </center>


</body>

</html>

<script>
    window.print();
</script>