
<?php
    // Lab: Looping Through Arrays

    // Example 12: Iterating over a numeric array using a for loop
    echo " using a for loop<br>";
    $numericArray = array(3, 7, 11, 15, 19);

    for ($i = 0; $i < count($numericArray); $i++) {
        echo $numericArray[$i] * 2 . ", "; // Doubling each element
    }
    echo "<br><br>";

    // Example 13: Iterating over an associative array using a foreach loop
    echo " using a foreach loop<br>";
    $assocArray = array(
        "name" => "Alice",
        "age" => 25,
        "city" => "Wonderland"
    );

    foreach ($assocArray as $key => $value) {
        echo "$key: $value, "; // Printing key-value pairs
        // Increasing age by 3
        if ($key === "age") {
            $assocArray[$key] += 3;
        }
    }
    echo "<br>";
?>