<?php

$mahasiswa = [
    ["Maleakhiano Paskarian", "H1101191038", "Sistem Informasi", "paskaaae999@student.untan.ac.id"],
    ["Brando", "H1101191066", "Sistem Informasi", "brando@student.untan.ac.id"],
    ["Kurniawan", "H1101191077", "Sistem Informasi", "kurniawan@student.untan.ac.id"]
];


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Daftar Mahasiswa</title>
        
    </head>
    <body>
    
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>NRP : <?php echo $mhs[1] ?></li>
        <li>Jurusan : <?php echo $mhs[2] ?></li>
        <li>Email : <?php echo $mhs[3] ?></li>
    </ul>
    <?php endforeach; ?>

    </body>
</html>