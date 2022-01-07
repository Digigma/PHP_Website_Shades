<?php
    include_once "./config.php";

    class orderplace{
        function submitorder(){
             require "config.php";
             $link = new PDO($dsn, $username, $password, $options);
                $a = $_POST['name'];
                $b = $_POST['email'];
                $c = $_POST['address'];
                $d = $_POST['phone'];
                $e = $_POST['total'];
            
    
            $sql = "INSERT INTO `detail`(`name`, `email`, `address`, `phone`, `total`) VALUES ('$a','$b','$c', '$d','$e')";
            
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $last_id = $link->lastInsertId();
            $s_id = session_id();
            $sql = "SELECT * FROM `cart` WHERE `session_id` = '$s_id'"; 
            $stmt = $link->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $row => $links){
                $id = $links["product_id"];
                $q = $links["quantity"];
                $p = $links["purchasing_price"];
                $s_id = $links["session_id"];

                $sql1 = "INSERT INTO `order_items`( `product_id`, `order_id`, `purchasing_price`, `quantity`, `session_id`) VALUES ('$id','$last_id','$q','$p','$s_id')";
                $stmt1 = $link->prepare($sql1);
                $stmt1->execute();
                

            }
            $sql2 = "DELETE FROM `cart` WHERE `session_id` ='$s_id'";
            $stmt2 = $link->prepare($sql2);
            $stmt2->execute();
            echo '<script type="text/javascript">alert("congratulations");</script>';
        }
 
    }
    
    $ordered = new orderplace;
    if(isset($_POST['submit'])){
        $ordered->submitorder();
    } 
 
  