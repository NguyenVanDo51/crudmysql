<?php


function createdb() {
    $servername = "localhost";
    $username = "root";
    $password = "root";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=phpmysql", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "
                CREATE TABLE IF NOT EXISTS book(
                    id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    book_name VARCHAR(25) NOT NULL,
                    book_publisher VARCHAR(20),
                    book_price FLOAT
                ); 
        ";
        $conn->exec($sql);
        return $conn;
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

?>