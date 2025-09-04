<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $fruits = array(
        "Apple"=> "Red",
        "Banana"=>"Yellow",
        "Grapes"=>"Green",
        "Orange"=>"Orange",
        "Blueberry"=>"Blue"
    );
    foreach ($fruits as $fruit => $color){
        echo "$fruit ka color $color hai.<br>";
    }
    ?>
</body>
</html>
