<?php 
//for functions


function confirmQuery($resultSet) {
    if(!$resultSet) {
        die("database query failed: " . mysqli_error());
    }
}
?>