<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework task 5</title>
</head>
<body>


<form action="hw5.php" method="get">
    First parameter: <input type="text" name="q" required><br>
    Second parameter: <input type="text" name="w" required><br>
    Third parameter: <input type="text" name="e" required><br>
    Fourth parameter: <input type="text" name="r" required>
    <input type="submit">


</form>
<?php if(!empty($_GET['q'])) {?>
<ul>
    <li><?php echo $_GET['q'];?></li>
    <li><?php echo $_GET['w'];?></li>
    <li><?php echo $_GET['e'];?></li>
    <li><?php echo $_GET['r'];?></li>
</ul>
<?php }?>
</body>
</html>
