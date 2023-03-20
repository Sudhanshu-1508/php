<html>
    <head><title></title></head>
    <body>
<?php

function addSUb($a, $b){
    $sum = $a+$b;
    $sub=$a-$b;
    return ($result= array($sum,$sub));
}

$ans = addSUb(10,5);
echo "Add" . $ans[0];
echo "Sub" . $ans[1];

?>
</body>
</html>