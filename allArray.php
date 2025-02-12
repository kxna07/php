<?php
    //indexed arrays
    $in_arr=array("apple","banana","cherry");
    echo "Indexed Array: ";
    print_r($in_arr);

    //associative arrays
    $assoc_arr=array("fruit"=>"apple","vegetable"=>"banana");
    echo "\n\nAssociative Array: ";
    print_r($assoc_arr);

    //multi-dimensional arrays
    $multi_arr=array(
        array("apple","banana"),
        array("cherry","orange"),
        array("grape","watermelon")
    );
    echo "\n\nMulti-Dimensional Array: ";
    print_r($multi_arr);
?>