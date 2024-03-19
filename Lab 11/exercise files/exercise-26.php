<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

function protect($mail) {

    $atPos = strpos($mail, '@');


    if ($atPos === false) {
        return $mail;
    }


    $username = substr($mail, 0, $atPos);


    $half = floor(strlen($username) / 2);


    return substr($username, 0, $half) . '...' . substr($mail, $atPos);
}

echo protect("test@ing.pub.ro") . '<br>';
echo protect("danalex@ing.pub.ro") . '<br>';
echo protect("mailupb2018@fing.pub.ro") . '<br>';
?>

</body>
</html>