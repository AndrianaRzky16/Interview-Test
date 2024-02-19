<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', 'secret');
    define('DB_NAME', 'test_interview');

    function connectToDatabase( ) {
        $conn = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        if ($conn->connect_error) {
            die("Connection Failed". $conn->connect_error);
        }
        return $conn;
    }

    function closeDatabaseConnection($conn) {
        $conn->close();
    }
?>