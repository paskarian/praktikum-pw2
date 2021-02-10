<?php
function salam($waktu = "datang", $nama = "admin") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan Function</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1><?= salam("Sore","Maleakhiano") ?></h1>
    </body>
</html>