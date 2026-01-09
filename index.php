<?php
// index.php
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding-top: 50px;
        }
        .container {
            background: #fff;
            padding: 30px;
            margin: auto;
            width: 60%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Benvenuto nel mio sito</h1>
    <p>Questa è una home page semplice in PHP.</p>

    <p>
        Oggi è:
        <strong><?php echo date("d/m/Y"); ?></strong>
    </p>
</div>

</body>
</html>
