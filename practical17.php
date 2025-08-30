<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Odd number between 20 and 80:<br>";
    for($i=20; $i<=80; $i++){
        if($i % 2 !=0){
            echo $i . " ";
        }
    }
    ?>
</body>
</html>
