<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [10,20,30,20,40,50,10,60,30];
    echo "Original Array :<br>";
    foreach($numbers as $num){
        echo $num . " ";
    }
    echo "<br><br>";
    $uniqueNumbers = array_unique($numbers);
    echo "Array after removing duplicates:<br>";
    foreach( $uniqueNumbers as $num){
        echo $num . " ";
    }
    ?>
</body>
</html>
