<?php 

    // Turn error reporting off
    error_reporting(0);

    // Constant for database
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', '');

    // Database connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
?>