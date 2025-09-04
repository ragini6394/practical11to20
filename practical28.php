<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers = [10,20,30,40,50,60];
    $searchValue = 30;
    echo "Array Elements:<br>";
    foreach($numbers as $num){
        echo $num . " ";
    }
    echo "<br><br>";
    echo "Searching for value: $searchValue<br><br>";
    if(in_array($searchValue,$numbers)){
        echo "value $searchValue exises in the array.";
    }else {
         echo "Value $searchValue does not exist in the array."; 
    }
            
    ?>
</body>
</html>
