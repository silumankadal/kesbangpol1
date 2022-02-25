<?php
require 'functions.php';

$jakpus = query("SELECT * FROM pemilu WHERE lokasi = 'jakarta pusat'");
var_dump($jakpus[0]["lokasi"]);
foreach ($jakpus as $jakpu):
var_dump($jakpu["lokasi"]);
endforeach;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="peta.css">
    
</head>
<body>
    <p class="coba" data-toggle="tooltip" data-placement="left" title="Tooltip">Tooltip pada Paragraf</p>
</body>
</html>
