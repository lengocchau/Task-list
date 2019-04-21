<?php
    $dsn = 'mysql:host=localhost;dbname=task';
    $username = 'chau';
    $password = 'lengocchau90';

    try {
        $db = new PDO($dsn, $username, $password);

    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>