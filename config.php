<?php
    $host="localhost";
    $user="root";
    $password="";
    $dbname="api";
    $port="3306";

    $conn=mysqli_connect($host,$user,$password,$dbname,$port);
    if($conn)
    {
        echo "connected";
    }
?>