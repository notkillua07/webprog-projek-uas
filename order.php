<?php
session_start();
if (isset($_SESSION['food'])) {
    $arr_food = $_SESSION['food'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <style type="text/css">
        p{font-family: Arial, Helvetica, sans-serif;}
        #container {
            display: grid;
            grid-template-columns: auto 250px;
        }

        #food-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 10px;
            padding: 10px;
            background: blue;
        }

        .card {
            background-color: red;
            text-align: center;
            height: 300px;
            padding: 20px 10px;
            
            max-width: 300px;
        }

        #receipt-container {
            width: 250px;
            background: blue;
        }

        img {
            aspect-ratio: 1/1;
            object-fit: cover;
            max-width: 247px;
        }

        body {
            margin: 0px;
        }

        .text-container {
            text-align: left;
            font-size: 24px;
            padding: 0 20px
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="food-container">
            <?php
            foreach ($arr_food as $kode => $arrfood) {
                $url = $arrfood[2];
                $nama = $arrfood[0];
                $harga = $arrfood[1];
                echo "<div class=\"card\" kode=\"$kode\">
                    <div class=\"img-container\">
                        <img src=\"$url\">
                    </div>
                    <div class=\"text-container\">
                        <p>
                        " . $nama . "<br>
                        Rp. " . $harga . "
                        </p>
                    </div>
                </div>";
            }
            ?>
        </div>
        <div id="receipt-container">

        </div>
    </div>

</body>

</html>