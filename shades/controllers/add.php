<?php

    include_once "./config.php";

    class products{
        function add(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_POST['id'];
            $q = 1;
            $p = $_POST['price'];
            $s = $_POST['session_id'];
            $sql = "SELECT 'product_id' ,COUNT(*) AS number FROM `cart` WHERE `product_id` = '$id' AND `session_id` = '$s'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $row => $link){
            if($link['number'] == 0 ){
                $sql1 = "INSERT INTO `cart`( `product_id`,`quantity`, `purchasing_price`, `session_id`) VALUES ('$id' , '$q' ,'$p','$s')";
                $stmt = $conn->prepare($sql1);
                $stmt->execute();
                echo '<script type="text/javascript">alert("Submit to cart Successfully");</script>';
            }else{
                $q = $link['quantity']+1;
                $sql1 = "UPDATE `cart` SET `quantity`='$q' WHERE `product_id` = '$id' AND `session_id` = '$s'";
                $stmt = $conn->prepare($sql1);
                $stmt->execute();
                echo '<script type="text/javascript">alert("Add One More Item");</script>';
            }

           }  
        } 
    }
    
    $product = new products;
    if(isset($_POST['submit'])){
        $product->add();
    } 

 





