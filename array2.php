<?php
//array multidimensi atau bersarang
$mahasiswa = [[
    "Virgo", "21510023", "Sistem Informasi", "virgo@stimata.ac.id"],
    [
        "Ulumudin", "22510023", "Teknologi Informasi", "ulumudin@stimata.ac.id"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <?php foreach ($mhs as $m) : ?>
        <li><?php echo $m; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endforeach ?>
</body>
</html>