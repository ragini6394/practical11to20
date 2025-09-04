<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = array();
    for($i=0; $i<10; $i++){
        $arr[$i]= $i + 1;
    }
    echo "indexed Array Elements:<br>";
    for($i =0; $i<10; $i++){
        echo "index [$i]= " . $arr[$i] . "<br>";
    }
    ?>
</body>
</html>
