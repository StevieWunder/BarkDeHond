<?php

class Db{
    public static function connect(){
        $hostname = "localhost";
        $username = "root";
        $password = "root";

        // Create connection
        $conn = new mysqli($hostname, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";

        mysqli_select_db ( $conn , 'barkthedog' );

        return $conn;

    }
}