<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="foundation/css/foundation.css">
    <link rel="stylesheet" href="foundation/css/app.css">
    <title>Homework_01</title>
</head>
<body>
<div class=" row ">
    <h1 class="large-text-center">Welcome to my first homework for IPA2019</h1>
    <h3 class="subheader"><small>Our first task is to create 5 different sites with links to each other.<br />
            This is the third site and will be using Foundation.</small></h3>
    <p class="lead">In here we are first time using foundation and checking out how the class lead will function.</p>

    <p class="text-left"><a href="index.html">First site + basic css</a></p>
    <p class="text-center"><a href="rwd1.php">Second site + bootstrap</a></p>
    <p class="text-right"><a href="#">Third site + foundation</a></p>
    <p class="text-justify"><a href="rwd3.php">Forth site + skeleton</a></p>
    <p class="text-right"><a href="rwd4.html">Fifth site + gumby</a></p>
    <hr>
    <button class="button tiny">Tiny Button</button>
    <button class="button small">small Button</button>
    <button class="button large">Large Button</button>
</div>
<hr>
<div class="container">
    <h3>Fill 2 numbers in the fields and choose arithmetic operator and watch the outcome</h3>
    <form action="rwd2.php" method="post">
        First number: <input type="text" name="q" required style="width:5cm"><br>
        Second number: <input type="text" name="w" required style="width:5cm"><br>
        Select Arithmetic operator: <select name="oper" style="width:5cm">
            <option value="1" selected>+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
            <option value="5">%</option>
            <option value="6">**</option>
        </select>
        <input type="submit">
    </form>
    <?php
    $q = $_POST['q'];
    $w = $_POST['w'];
    $oper = $_POST['oper'];
    $z = "";
    if(is_numeric($q) && is_numeric($w)) {
        if ($oper == 1) {
            $z = $q + $w;
            echo "<p> Result: " . $z .= "</p>";
        } else if ($oper == 2) {
            $z = $q - $w;
            echo "<p> Result: " . $z .= "</p>";
        } else if ($oper == 3) {
            $z = $q * $w;
            echo "<p> Result: " . $z .= "</p>";
        } else if ($oper == 4) {
            $z = $q / $w;
            echo "<p> Result: " . $z .= "</p>";
        } else if ($oper == 5) {
            $z = $q % $w;
            echo "<p> Result: " . $z .= "</p>";
        } else if ($oper == 6) {
            $z = $q ** $w;
            echo "<p> Result: " . $z .= "</p>";
        }
    } else {
        echo "Only integers allowed.";
    }?>

</div>

</body>
</html>