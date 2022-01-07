<?php
    include_once "./config.php";
    class viewItem{
        function onlyproduct(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_GET['id'];
            $sql = "SELECT * FROM `items` WHERE id = '$id' "; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;

        }
    }
    $onlyproduct = new viewItem;
?>