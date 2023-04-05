<?php
require 'koneksi.php';
$vendor = query("SELECT * FROM  tugasdatavendor");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 50%;
            height: 500%;
            background-color: white;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border: 2px solid black;
            border-width: 3px;
        }
        table tr th {
            font-size: 15px;
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>daftar data vendor</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Perusahan</th>
            <th>Alamat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1;?>
        <?php foreach ($vendor as $dor): ?>
        <tr>
            <td><?= $i;?></td>
            <td><?= $dor["Kode"];?></td>
            <td><?= $dor["Nama Perusahan"];?></td>
            <td><?= $dor["Alamat"];?></td>
            <td><?= $dor["keterangan"];?></td>
            <td>
                <a href="#">Ubah</a>
                <a href="#">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>