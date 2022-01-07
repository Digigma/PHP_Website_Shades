<?php
    include_once "./config.php";
    class showitems{
        function show(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $sql = "SELECT *FROM `items`  ORDER BY id DESC"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->fetchAll();
            return $res;
        }
    }
    $show = new showitems;
?>