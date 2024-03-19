<DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
</head>
<body>

           <?php
           function sumDigits($n) {
           $sum = 0;

           while ($n > 0){
           $sum += $n % 10;
           $n = intval($n / 10);
           }
          return $sum;
          }
           echo sumDigits(123);
           echo sumDigits(12301);
           echo sumDigits(1010);
           ?>

</body>
</html>