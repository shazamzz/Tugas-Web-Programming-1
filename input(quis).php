<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="output(quis).php" method="post">
<h2>Tambah Data Rak</h2>
<table>
<pre> 
<font size='4'><strong>Nama Gedung      :</strong></font>  
<select name="nama_gedung">
<option value="-Pilih Gedung-">-Pilih Gedung-
<option value="Tower A">Tower A
<option value="Tower B">Tower B
<option value="Tower C">Tower C
<option value="Tower D">Tower D
</select>

<font size='4'><strong>Nama Lantai      :</strong></font>  
<select name="nama_lantai">
<option value="-Pilih Lantai-">-Pilih Lantai-
<option value="Basement">Basement
<option value="Lobby">Lobby
<option value="2">2
<option value="3">3
<option value="4">4
<option value="5">5   
<option value="Rooftop">Rooftop
</select>

<font size='4'><strong>Kode Rak         : </strong></font>
<input type="number" name="kode_rak">

<font size='4'><strong>Nama Rak         : </strong></font>
<input type="text" name="nama_rak">

<font size='4'><strong>Kapasitas (Baris): </strong></font>
<input type="number" name="kapasitas">

<font size='4'><strong>keterangan       : </strong></font>
<textarea type="text" name="keterangan"></textarea>

<input type="submit" value="Simpan"><input type="reset" value="Tutup">
</table>
</body>
</html>