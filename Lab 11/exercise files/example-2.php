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
$arrTest=[5,7,1,4,8];
function deleteElement($arr, $element) {
    $index= array_search($element, $arr);
    if($index > -1) {
        array_splice($arr, $index, 1);
    }
    return $arr;
}

function displayArr($arr){
    for($i = 0; $i < count($arr); $i++){
        echo $arr[$i];
    }
    echo "<br>";
}

displayArr(deleteElement($arrTest, 4));
displayArr(deleteElement($arrTest, 9));
displayArr(deleteElement($arrTest, 7));
?>

</body>
</html>

