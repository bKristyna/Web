<?php 
    $conn = new mysqli ("localhost", "root", "root", "blog"); 

    if ($conn->connect_error) {
        die("Připojení k databázi se nezdařilo: " . $conn->connect_error);
    }

    mysqli_close($conn);
?>