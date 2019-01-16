<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework task 6</title>
</head>
<body>


<form action="hw6.php" method="get">
    First parameter: <input type="int" name="q" required><br>
    Second parameter: <input type="int" name="w" required><br>
    Third parameter: <input type="int" name="e" required><br>
    Fourth parameter: <input type="int" name="r" required>
    <input type="submit">


</form>
<?php
$q = $_GET['q'];
$w = $_GET['w'];
$e = $_GET['e'];
$r = $_GET['r'];

$t = $q + $w + $e + $r;

if(!empty($_GET['q'])){
    ?>
    <table>
        <tbody>
            <tr>
                <td align="right"><?php echo $q;?></td>
            </tr>
            <tr>
                <td align="right"><?php echo $w;?></td>
            </tr>
            <tr>
                <td align="right"><?php echo $e;?></td>
            </tr>
            <tr>
                <td align="right">+<?php echo $r;?></td>
            </tr>
            <tr>
                <td align="right">-----</td>
            </tr>
            <tr>
                <td align="right"><?php echo $t;?></td>
            </tr>
        </tbody>
    </table><?php

}
?>

</body>
</html>
