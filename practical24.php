<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(10,20,30,40,50);
    $sum = 0;
    foreach($numbers as $num) {
        $sum += $num;
    }
   echo "Indexed Array Elements: ";
   foreach($numbers as $num){
    echo $num . " ";
   }
   echo "\nsum of all numbers: ".$sum;
    ?>
 
</body>
</html>
