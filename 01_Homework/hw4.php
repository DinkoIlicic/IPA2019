<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework task 4</title>
</head>
<body>


<form action="hw4.php" method="get">
    First number: <input type="int" name="q" required><br>
    Second number: <input type="int" name="w" required><br>
    Third number: <input type="int" name="e" required>
    <input type="submit">


</form>
<?php
$q = $_GET['q'];
$w = $_GET['w'];
$e = $_GET['e'];
$z = $q + $w + $e;

if(empty($_GET['q']) && empty($_GET['w']) && empty($_GET['e'])){
    ?> <h1>Fill all fields with only integers</h1><?php

} else {?>
<h1><?php echo $q; ?> + <?php echo $w;?> + <?php echo $e;?> = <?php echo $z;?></h1>
<?php };?>
</body>
</html>
