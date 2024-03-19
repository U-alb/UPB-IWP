<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
function factorial($n)
{
    if ($n === 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

function sum($n)
{
    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum += factorial($i);
    }

    return $sum;
}

echo sum(1) . "<br>";
echo sum(2) . "<br>";
echo sum(3) . "<br>";
?>

</body>
</html>
