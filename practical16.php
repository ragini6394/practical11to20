<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Number from 1 to 20 using for loop:<br>";
    for($i=1; $i<=20; $i++){
        echo $i ." ";
    }
    echo "<br><br>";
     echo "Number from 1 to 20 using while loop:<br>";
     $i = 1;
     while($i <= 20){
        echo $i . " ";
        $i++;
     }
     echo "<br><br>";
     echo "Number from 1 to 20 using do-while loop:<br>";
     $i = 1;
     do{
        echo $i . " ";
        $i++;
     }while($i<= 20);
    ?>
</body>
</html>
