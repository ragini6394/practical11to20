<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $students = array(
        "Ravi" => 85,
        "Priya" => 90,
        "Aman" =>78,
        "Neha" =>92,
    );
    $key = "Priya";
    if(array_key_exists($key , $students)){
        echo "The key '$key' exists in the array with value: " . $students[$key];
    } else{
        echo "The key '$key'does not exits in the array.";
    }
    ?>

</body>
</html>
