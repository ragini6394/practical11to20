<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $marks = array(
        "Ragini" => 85,
        "Roli" => 87,
        "Riya" => 78,
        "Radhika" => 92,
    );
    $marks["Radha"] = 88;
    foreach($marks as $student => $score){
        echo "$student => $score <br>";
    }
    ?>
</body>
</html>
