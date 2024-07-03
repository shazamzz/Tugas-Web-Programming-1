<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <center>
        <br>
        <br>
        <form action="hasil.php" method="post">
    <table border='1'>
        <tr>
            <td><input type="text" class="from-control" required name="nama" placeholder="Nama Anda"></td>
        </tr>
        <tr> 
            <td><input type="number" class="from-control" required name="nim" placeholder="Nim Anda"></td>

        </tr>
        <tr> 
            <td><input type="date" class="from-control" required name="ttl" placeholder="TTL Anda"></td>
        </tr>

        <tr> 
            <td><button type="submit"name="kirim" class="btn btn-success">Proses</button></td> 
        </tr>
        </tr>
    <table>
    </center>
</body>
</html>