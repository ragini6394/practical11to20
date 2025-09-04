<!DOCTYPE html>
<html lang="en">
<body>
    <?php
    $countries = array(
        "India" =>"New Delhi",
        "USA" =>"Washington D.C.",
        "UK" =>"London",
        "France"=>"Paris",    
    );
    $capital = "Paris";
    $country = array_search($capital,$countries);
    if ($country !==false){
        echo "The capital city '$capital'belongs to: $country";
    }
    else{
        echo "The capital city '$captical'was not found in the array.";
    }
    ?>
</body>
</html>
