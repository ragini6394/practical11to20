<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = array(12,34,66,87,89,2,76,45);
    $largest = max($numbers);
    $smallest = min($numbers);
    
    echo "Array Elements: <br>";
    foreach ($numbers as $num){
        echo $num . " ";
    }
    echo "<br><br>Largest Number = " . $largest;
    echo "<br><br>Smallest Number = " . $smallest;
    ?>
</body>
</html>
