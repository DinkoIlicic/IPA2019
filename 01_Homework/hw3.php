<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework task 3</title>
</head>
<body>


<form action="hw3.php" method="get">
    First parameter: <input type="text" name="q"><br>
    Second parameter: <input type="text" name="w">
    <input type="submit">


</form>
<h1><?php echo $_GET['q'];?></h1>
<h1><?php echo $_GET['w'];?></h1>
</body>
</html>
