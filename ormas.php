<?php
require 'functions.php';

$ormass = query("SELECT * FROM ormas");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
        </tr>
        <?php $i=1; ?>
        <?php foreach ($ormass as $ormas): ?>
        <tr>
        <td><?php echo $i;?></td>
            <td><?php echo $ormas["nama"]; ?></td>
            <td><?php echo $ormas["alamat"]; ?></td>
            <td><?php echo $ormas["telepon"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>