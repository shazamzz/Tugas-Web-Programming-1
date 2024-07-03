<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Hasil</h2>
<?php


$nama_gedung=$_POST['nama_gedung'];
$nama_lantai=$_POST['nama_lantai'];
$kode_rak=$_POST['kode_rak'];
$nama_rak=$_POST['nama_rak'];
$kapasitas=$_POST['kapasitas'];
$keterangan=$_POST['keterangan'];
?>
<table border=1>

<tr><td>Nama Gedung</td><td><?php echo $nama_gedung?></td></tr>
<tr><td>Nama Lantai</td><td><?php echo $nama_lantai?></td></tr>
<tr><td>Kode Rak</Code></td><td><?php echo $kode_rak?></td></tr>
<tr><td>Nama Rak</td><td><?php echo $nama_rak?></td></tr>
<tr><td>Kapasitas</td><td><?php echo $kapasitas?></td></tr>
<tr><td>Keterangan</td><td><?php echo $keterangan?></td></tr>
</table>
</body>
</html>