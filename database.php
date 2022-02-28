<?php
    $dsn = 'mysql:host=localhost;dbname=ca2_serverside';
    $username = 'D00236472';
    $password = 'D00236472';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>