<?php
    function getConnection()
    {
        $dsn = 'mysql:host=localhost;dbname=jmanalo_blogs';
        $username = 'jmanalo_jeremy';
        $password = 'Zenandhemi123';
        
        try {
            $connection = new PDO($dsn, $username, $password);
            
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connection;
        }   catch (PDOException $ex) {
            echo 'Exception connection to DB: '.$ex->getMessage();
            exit();
        }        
    }
?>