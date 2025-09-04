<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $students = array(
        "Upasna" =>"10th",
        "Ragini" => "12th",
        "Astha" => "11th",
    );
    $students["Vandana"] = "12th";
    foreach($students as $name => $class){
        echo "$name is in $class class <br>";
    }
    ?>
</body>
</html>