<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [54,65,87,54,34,67,34,];
    echo "Original Array: <br>";
    foreach($numbers as $num){
        echo $num . " ";
    }
    echo "<br><br>";

    sort($numbers);
    echo "Array in Ascending Order (sort):<br>";
    foreach($numbers as $num){
        echo $num . " ";
    }
     echo "<br><br>";
    rsort($numbers);
    echo "Array in descending Order (rsort):<br>";
    foreach($numbers as $num){
        echo $num . " ";
    }
    ?>
</body>
</html>
