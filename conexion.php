<?php

 $conn = new mysqli("localhost", "root", "mysql123", "VistePorMenos");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>