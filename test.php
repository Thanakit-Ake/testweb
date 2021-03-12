<?php
    echo "test<br>";
    $mysqli = new mysqli("localhost","Thanakit","YjrXlOiawfhOxGOK","testa");

// Check connection
    if ($mysqli->connect_error) {
    echo "Failed to commect to mysql".$mysqli->connect_error;
    exit();
}else{
echo "Connected successfully";
}
?>