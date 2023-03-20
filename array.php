<html>
    <head><title></title></head>
    <body>
<?php
    $array1 = array(5,6,7,3,23);
    echo $array1[0];

    $array2 = array(6, "fox", "dog", array("x", 2, 3));
    echo $array2[3][0];

    $array3 = array("firstName" => "sefwrf", "lastName"=>"31778");
    echo $array3["firstName"] . " " . ["lastName"];

    print_r($array2);
?>
</body>
</html>