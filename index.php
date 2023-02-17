<?php
$x = 2;
$y = 3;
$z = 4;
$nam1 = 3.4 * $x + $y;
$nam2 = 0.8* $x + 0.9* $y- $x * $y;
$nam3 = ($x - $z)* $z + $y * $z;
$nam4 = (15*$x**2-7/12*$y)/(18*$y+$x**2);
$nam5a = (5*$x**(3*$y)-2)/(10*$x*$y);
$nam5b = (12*$x+$y)/(3*$x-$y**(5+2*$x));
$nam6 = ($x+$y)*$z;
$nam7 = ($x+$z)*$y+0.1*$x;
$nam8 = (30*($x**3-5/6*$y))/(5*($x**3-6*$y));
$nam9 = (40*$y**3+4/9*$x)/(6*$x**2-18*$x*$y);
$nam10a = (5*$x**(3+$y)-2)/(10-$x*$y);
$nam10b = (12*$x*$y)/(3*$x+$y**(2*$x));
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=style.css>
    <title>Ответы</title>
</head>
<body>
    <table class="box">
        <tr><th><h3>ОТВЕТЫ</h3></th></tr>
        <tr><td><b>1)   <?php echo $nam1; ?></td></tr>
        <tr><td><b>2)   <?php echo $nam2; ?></td></tr>
        <tr><td><b>3)   <?php echo $nam3; ?></td></tr>
        <tr><td><b>4)   <?php echo $nam4; ?></td></tr>
        <tr><td><b>5)   <?php echo $nam5a / $nam5b; ?></td></tr>
        <tr><td><b>6)   <?php echo $nam6; ?></td></tr>
        <tr><td><b>7)   <?php echo $nam7; ?></td></tr>
        <tr><td><b>8)   <?php echo $nam8; ?></td></tr>
        <tr><td><b>9)   <?php echo $nam9; ?></td></tr>
        <tr><td><b>10)  <?php echo $nam10a / $nam10b; ?></td></tr>
    </table>
</body>
</html>


