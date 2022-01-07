<?php

    include_once "./config.php";

    class cart{
        function showCart(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $session_id = session_id();
            $sql = "SELECT * ,cart.quantity As q FROM (cart) INNER JOIN items ON items.id=cart.product_id WHERE cart.session_id = '$session_id'"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

        function delete(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_POST['delete_id'];
            $sql = "DELETE FROM `cart` WHERE `id` ='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo " <script> location.replace('./checkout.php'); </script>";

        }
    }

    $cartItems = new cart;

    if(isset($_POST['delete'])){
        $cartItems->delete();
    }
