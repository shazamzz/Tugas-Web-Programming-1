<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>Form Registrasi</h1>
    <?php
        echo "Isi Data Dibawah Ini :"
    ?>
<body>
    <br>
    <br>
    <form action="hasiltgs 1.php" method="POST">
    <table>
    <pre>
         Nama          : <input type="text" name="nama">
         Alamat        : <textarea name="alamat" rows="5" cols="40"></textarea>
         Tempat Lahir  : <input type="text" name="tempat_lahir">
         Tanggal Lahir : <input type="date" name="tanggal_lahir">
         Jenis Kelamin : <input type="radio" name="jenis_kelamin" value=Laki-laki>Laki-laki <input type="radio" name="jenis_kelamin" value=Perempuan>Perempuan
         Pendidikan    : <select name="pendidikan">
                         <option value="-pilih-">
                         <option value="S1">S1
                         <option value="SMA">SMA
                         <option value="SMP">SMP
                         <option value="SD">SD
                         </selct>
                         <tr>
                        <input type="submit" value="Submit"><input type="reset" value="Cancel">
                        </tr>
    </table>
    </body>
</html>