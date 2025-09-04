<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $arr = [10,20,30,40,50,60];
    echo "<h3>Original Array:</h3>";
    foreach ($arr as $val){
        echo $val . " ";
    }
     echo "<h3>Reverse(without array_reverse()):</h3>";
     for ($i = count($arr) - 1; $i >=0; $i--){
        echo $arr[$i] . " ";
     }
      echo "<h3>Reverse(with array_reverse()):</h3>";
      $revArr = array_reverse($arr);
      foreach($revArr as $val){
        echo $val . " ";
      }
    ?>
</body>
</html>
