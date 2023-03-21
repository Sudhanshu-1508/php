<html>
    <head><title></title></head>
    <body>
<?php
$ages = array(4,8,12,16,20);

echo current($ages) ;
next($ages);
echo "<br />";
echo current($ages) ;
next($ages);
echo "<br />";

echo "<h3>current and next with while loop <h3/>";

while($age = current($ages)){
    echo $age . ", ";
    next($ages);
}

//not similar to pointers in c and c++
?>
</body>
</html>