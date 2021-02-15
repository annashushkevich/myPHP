<?php
class DB {
    function __construct() {
        $host = "127.0.0.1";
        $user = "mysql";
        $pass = "mysql"; 
        $name = "task5";
        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$name", $user, $pass);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    function __destruct() {
        $this->conn = null;
    }

    function set ($value)
    {
        $stmt = $this->conn->prepare("
            DROP TABLE numbers;
            CREATE TABLE `numbers` (
                `ID` int(11) NOT NULL PRIMARY KEY ,
                `INPUT` varchar(200) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
            INSERT INTO `numbers` (`ID`, `INPUT`) VALUES (1, '0');
            UPDATE `numbers` SET INPUT = '{$value}' WHERE ID = 1
        ");
        $stmt->execute();
    }

    function get ()
    {
        $stmt = $this->conn->prepare("SELECT INPUT FROM numbers WHERE ID = 1");
        $stmt->execute();
        return $stmt->fetch();
    }

}
?>