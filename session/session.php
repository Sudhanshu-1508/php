<?php 
    session_start();
?>

<html>
    <head><title>session</title></head>
    <body>

<?php
$_SESSION['name'] = "sudhanshu";

$name = $_SESSION['name'];
echo $name;


?>
</body>
</html>