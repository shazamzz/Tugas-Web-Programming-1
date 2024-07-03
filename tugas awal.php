<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <h1>Add Product</h1>
    <?php
    ?>
<body>
    <form action="output.php" method="post">
    <table>
        <pre>
        <tr>  
         Type Product       : <select name="type_product">
                              <option value="-pilih-">
                              <option value="SHIRT">SHIRT
                              <option value="PANTS">PANTS
                              <option value="T-SHIRT">T-SHIRT
                              <option value="SHOE">SHOE
                              </selct>
        </tr><br>
        <tr>
         Product            : <input type="text" name="product">
        </tr><br>
        <tr>
         Cost Product Code  : <input type="text" name="cost_product_code">
        </tr><br>
        <tr>
         Qty                : <input type="number" name="qty">
        </tr><br>
        <tr>
         Unit               : <select name="unit">
                              <option value="-pilih-">
                              <option value="01">01
                              <option value="02">02
                              <option value="03">03
                              <option value="04">04
                              </selct>;
        </tr><br>
        <tr>
         Price              : <input type="number" name="price">
        </tr><br>
                              <tr>
                              <td></td>
                              <td><input type="submit" value="Submit"><input type="reset" value="Cancel"></td>
                              </tr>
    </table>
    </body>
</html>