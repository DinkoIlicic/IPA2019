<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="skeleton/css/skeleton.css">
    <link rel="stylesheet" href="skeleton/css/normalize.css">
    <title>Homework_01</title>
</head>
<body>
<h1>Welcome to my first homework for IPA2019</h1>
<div class="container">
    <div class="row">
        <div class="eight columns"> Our first task is to create 5 different sites with links to each other.</div>
        <div class="four columns"> This is the forth site and will be using Skeleton.</div>
    </div>
</div>

<ul>
    <li>All other sites
        <ol>
            <li><a href="index.html">First site + basic css</a></li>
            <li><a href="rwd1.php">Second site + bootstrap</a></li>
            <li><a href="rwd2.php">Third site + foundation</a></li>
            <li><a href="#">Forth site + skeleton</a></li>
            <li><a href="rwd4.html">Fifth site + gumby </a></li>

        </ol>

    </li>


</ul>

<table class="u-full-width">
    <thead>
    <tr>
        <th>Testing tables with skeleton</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>For now its going good</td>
        <td>With more time it would be better</td>
    </tr>
    </tbody>

</table>

<div class="container">
    <div class="row">
        <div class="one-half column">
            <img src="skeleton/images/favicon.png" alt="" class="showcase-img">
        </div>
    </div>
</div>

<section class="section section-b">
    <div class="container">
        <h3 class="section-heading">
            Heading
        </h3>
        <p class="section-description">Information about the section</p>
        <a href="#" class="button button-primary"><i class="fa fa-file"></i>View the other sites</a>
    </div>
</section>
<hr>
<div>
    <h3>Number comparison operators functionality shown</h3>
    <form action="rwd3.php" method="get">
        First number: <input type="int" value="<?php echo $_GET['q'];?>" name="q" required><br>
        Second parameter: <input type="int" value="<?php echo $_GET['w'];?>" name="w" required><br>
        <input type="submit">
    </form>
    <?php
    $q = $_GET['q'];
    $w = $_GET['w'];

    if(is_numeric($q) && is_numeric($w)) {
        if (!empty ($q) && !empty($w)) {

            echo "Are these 2 numbers Equal (==)? ";
            if ($q == $w) {
                echo "Yes they are Equal.";
            } else {
                echo "No they are not.";
            }

            echo "<br>";
            echo "Are these 2 numbers Identical (===)? ";
            if ($q === $w) {
                echo "Yes they are Identical.";
            } else {
                echo "No they are not.";
            }

            echo "<br>";
            echo "Are these 2 numbers not Equal (!=)? ";
            if ($q != $w) {
                echo "Yes they are not Equal.";
            } else {
                echo "No they are not.";
            }

            echo "<br>";
            echo "Are these 2 numbers not Equal (<>)? ";
            if ($q <> $w) {
                echo "Yes they are not Equal.";
            } else {
                echo "No they are not.";
            }

            echo "<br>";
            echo "Are these 2 numbers not Identical (!==)? ";
            if ($q !== $w) {
                echo "Yes they are not Identical.";
            } else {
                echo "No they are not.";
            }

            echo "<br>";
            echo "Is first number greater than (>) the second number? ";
            if ($q > $w) {
                echo "Yes.";
            } else {
                echo "No";
            }

            echo "<br>";
            echo "Is first number less than (<) the second number? ";
            if ($q < $w) {
                echo "Yes.";
            } else {
                echo "No";
            }

            echo "<br>";
            echo "Is first number greater than or equal to (>=) the second number? ";
            if ($q >= $w) {
                echo "Yes.";
            } else {
                echo "No";
            }

            echo "<br>";
            echo "Is first number less than or equal to (<=) the second number? ";
            if ($q <= $w) {
                echo "Yes.";
            } else {
                echo "No";
            }

            echo "<br>";
        }
    } else {
        echo "Only integers allowed.";
    }
    ?>


</div>


</body>
</html>