<?php
     $host = "localhost";
     $user = "root";
     $password = "";
     $database = "transcorp";
  
     $conn = mysqli_connect($host, $user, $password,$database);
     if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Connected successfully";
?>