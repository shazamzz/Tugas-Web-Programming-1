<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<title></title>
<body>
<form action="hasil_ganjil.php" method='post'>
<h2>Add Product</h2>
<pre>
Tipe Product        :<select name='tipe'>
    <option value='Null'>
    <option value='Makanan'>Makanan
    <option value='Minuman'>Minuman
    <option value='Snack'>Snack
</select>
Product             :<input type='text' name='produk'>
Cust code           :<input type='number' name='code'>
Quantity            :<input type='number' name='qty'>
Unit                :<select name='unit'>
    <option value='Null'>
    <option value='Teh Botol'>Teh Botol
    <option value='Chuba'>Chuba
    <option value='Tanggo'>Tanggo
    <option value='Marimas'>Marimas
</select>
Price               :<input type='number' name='harga'>
<input type='submit' value='Submit'>
</body>
</html>