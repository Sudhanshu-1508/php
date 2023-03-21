<html>
    <head><title>first</title></head>
    <body>
        <a href = "pageTwo.php?name=<?php echo urlencode("sudhanshu& kulkarni") ?>&id=1">Page two</a>
<?php

// a href works fine when there's only one & in the url but when there two & in the url there comes the urlencode in php
//html specialchars(anme of the var that you want to send )
?>
</body>
</html>

