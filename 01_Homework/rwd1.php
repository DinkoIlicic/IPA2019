<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Homework_01</title>
</head>
<body>
<div class="container">
    <h1 class="text-primary">Welcome to my first homework for IPA2019</h1>
    <h3 class="text-info">Our first task is to create 5 different sites with links to each other.<br />
        This is the <mark>second</mark> site and will be using bootstrap.</h3>

    <ol class="list-group">
        <li class="list-group-item"><a href="index.html">First site + basic css</a></li>
        <li class="list-group-item"><a href="#">Second site + bootstrap</a></li>
        <li class="list-group-item"><a href="rwd2.php">Third site + foundation</a></li>
        <li class="list-group-item"><a href="rwd3.php">Forth site + skeleton</a></li>
        <li class="list-group-item"><a href="rwd4.html">Fifth site + gumby</a></li>
    </ol>
    <h3><mark>Bootstrap logo</mark></h3>
    <img src="jpg/bootstrap.jpg" class="img-circle" width="300" height="300">
</div>
<div class="container">
    <h3>Create Your own List here up to maximal 5 parameters</h3>
    <form action="rwd1.php" method="get">
        First parameter: <input type="text" name="q"><br>
        Second parameter: <input type="text" name="w"><br>
        Third parameter: <input type="text" name="e"><br>
        Forth parameter: <input type="text" name="r"><br>
        Fifth parameter: <input type="text" name="t">
        <input type="submit">
    </form>
    <?php
    $q = $_GET['q'];
    $w = $_GET['w'];
    $e = $_GET['e'];
    $r = $_GET['r'];
    $t = $_GET['t'];

    if(!empty($q) || !empty($w) || !empty($e) or !empty($r) or !empty($t)) {?>
        <ul class="list-group"><?php
        if(!empty($q) && isset($_GET['q'])){?>
            <li class="list-group-item"><?php echo $q;?></li><?php
        }
        if(!empty($w) && isset($_GET['w'])){?>
            <li class="list-group-item"><?php echo $w;?></li><?php
        }
        if(!empty($e) and isset($_GET['e'])){?>
            <li class="list-group-item"><?php echo $e;?></li><?php
        }
        if(!empty($r) and isset($_GET['r'])){?>
            <li class="list-group-item"><?php echo $r;?></li><?php
        }
        if(!empty($t) xor 4==5){?>
            <li class="list-group-item"><?php echo $t;?></li><?php
        }

        ?>


        </ul><?php
    }?>

</div>


</body>
</html>