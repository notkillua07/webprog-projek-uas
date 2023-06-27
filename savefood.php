<?php
session_start();
if (isset($_POST['txtKM']) && isset($_POST['txtNM']) && isset($_POST['txtHM']) && isset($_POST['txtUM'])) {
    $namaMakanan = $_POST['txtNM'];
    $kodeMakanan = $_POST['txtKM'];
    $hargaMakanan = $_POST['txtHM'];
    $urlMakanan = $_POST['txtUM'];
    $_SESSION['food'][$kodeMakanan] = array($namaMakanan, $hargaMakanan, $urlMakanan);
    header("location: index.php");
}
