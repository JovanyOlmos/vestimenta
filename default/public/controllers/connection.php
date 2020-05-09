<?php
    function Connect() {
        $user="root";
        $password="";
        $host="localhost";
        $dbname="vestimenta";
        $conn = new mysqli($host, $user, $password, $dbname);

        if ($conn->connect_error) {
            return die("Connection failed: " . $conn->connect_error);
        }
        else {
            return $conn;
        }
    }
?>