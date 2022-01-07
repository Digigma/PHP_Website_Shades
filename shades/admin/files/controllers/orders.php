<?php

    include_once "./config.php";

    class show{
      
        function order(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $sql = "SELECT * FROM detail ORDER BY `id` DESC"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function items(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_GET['id'];
            $sql = "SELECT *, order_items.quantity AS qty FROM `order_items` INNER JOIN items ON order_items.product_id = items.id WHERE order_items.order_id = '$id'"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

    }
    
    $orders = new show;