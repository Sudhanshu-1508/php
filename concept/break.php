<html>
    <head><title></title></head>
    <body>
<?php

$array1 = array(1, 21,565,987,65,26);

foreach ($array1 as $value) {
    echo "$value <br/>";
}
 
for ($count = 0; $count < count($array1); $count++)
{
   if($array1[$count] == 65){
    echo "65 is present ";
    break;
   }
   echo "found 65";
}

?>
</body>
</html>