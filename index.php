<!DOCTYPE html>
<html lang="en">
<?php
// session_start();
// session_destroy();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input food!</title>
    <style type="text/css">
        label{ font-family: Arial, Helvetica, sans-serif;}
    </style>
</head>

<body>
    <form action="savefood.php" method="post">
        <label for="txtKM">Isikan Kode makanan: <input type="text" name="txtKM" placeholder="Kode Makanan" style="margin-left: 27px;"></label><br>
        <label for="txtNM">Isikan Nama makanan: <input type="text" name="txtNM" placeholder="Nama Makanan" style="margin-left: 22px;"></label><br>
        <label for="txtHM">Isikan Harga makanan: <input type="number" name="txtHM" placeholder="Harga Makanan" max="500000" min="0" style="margin-left: 21px;"></label><br>
        <label for="txtUM">Isikan URL foto makanan: <input type="text" name="txtUM" placeholder="URL foto Makanan" style="margin-left: 1px;"></label><br>
        <input type="submit" value="Save">
        <a href="order.php">Pergi ke order.php</a>
    </form>
    <?php 
    session_start();
    if(isset($_SESSION['food'])){
        print_r($_SESSION['food']);
    }
    ?>
</body>

</html>