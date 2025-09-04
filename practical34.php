<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $fruits = array(
       "Apple"=>120,
       "Banana"=>40,
       "Mango"=>100,
       "Orange"=>60,
       "Grapes" =>80,
    );
    echo "<h3>Original Array:</h3>";
    print_r($fruits);
    asort($fruits);
    echo "<h3>Sorted by Values (asort):</h3>";
    print_r($fruits);
    ksort($fruits);
    echo "<h3>Sorted by key (ksort):</h3>";
    print_r($fruits);
    ?>
</body>
</html>
