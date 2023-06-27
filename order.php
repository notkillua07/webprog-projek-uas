<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <style type="text/css">
        #food-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            gap: 10px;
            padding: 10px;
            width: 750px;
            background: blue;
        }

        #food-container> .card {
            background-color: rgba(255, 255, 255, 0.8);
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
        }

        #receipt-container {
            width: 250px;
            background: red;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="food-containter">
            <div class="card">1</div>

        </div>
        <div id="receipt-container">

        </div>
    </div>

</body>

</html>