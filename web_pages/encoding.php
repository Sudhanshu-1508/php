<html>
    <head><title>encoding</title></head>
    <body>
<?php
$urlPage = 'php/created/page/url/php';
$param1 = 'this is a string';
$param2 = '"bad" / <> character$';
$linktext = "<Click & you'll see>";


?>

<?php 
//clean link to use
$url = "http://localhost/";
$url .= rawurldecode($urlPage);
$url .= "?param1=" . urldecode($param1);
$url .= "&param2=" . urlencode($param2);
?>
<a href="pageTwo.php?name=
<?php echo urlencode("Sudhanshu k"); ?>&id=42">
<?php echo htmlspecialchars($linktext); ?>
</a>
</body>
</html>