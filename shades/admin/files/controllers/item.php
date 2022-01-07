<?php

    include_once "./config.php";
    class products{
        function add(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $a = $_POST['name'];
            $p = $_POST['price'];
            $q = $_POST['quantity'];
            $d = $_POST['description'];
            $img = $_FILES["image"]["name"];
            $tmp_img = $_FILES["image"]["tmp_name"];
            $folder = "../images/".$img;
            move_uploaded_file($tmp_img, $folder);
           
            $sql = "INSERT INTO `items`(`name`,  `price`, `description`, `quantity` ,`img`) VALUES ('$a','$p','$d','$q','$img')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo '<script type="text/javascript">alert("Insert New Item Successfully");</script>';
               
        }
 

        function showitems(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $sql = "SELECT *FROM `items` ORDER BY id DESC"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

     
        function delete(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_POST['delete_id'];
            $sql = "DELETE FROM `items` WHERE `id` ='$id'";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            echo " <script> location.replace('./items.php'); </script>";
           
               
        }

         function singleitem(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
            $id = $_GET['id'];
            $sql = "SELECT * FROM `items` WHERE `id` = '$id' "; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }

          function edit(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);

            $id = $_GET['id'];
            $a = $_POST['name'];
            $b = $_POST['price'];
            $c = $_POST['quantity'];
            $d = $_POST['description'];
            $image = $_FILES["image"]["name"];

            if ($image == null) {

                $sql = "UPDATE `items` SET `name`='$a',`price`='$b',`description`='$d', `quantity`='$c'  WHERE `id` = '$id' ";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                echo " <script> location.replace('./items.php'); </script>";

            }else{

                $tmp_image = $_FILES["image"]["tmp_name"];
                $folder = "../images/".$image;
                move_uploaded_file($tmp_image, $folder);

                $sql = "UPDATE `items` SET `name`='$a',`price`='$b',`description`='$d', `quantity`='$c' ,`img`='$image' WHERE `id` = '$id' ";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                echo " <script> location.replace('./items.php'); </script>";

            }

        }

    }
    
    $items = new products;
    if(isset($_POST['submit'])){
        $items->add();
    } 

    if(isset($_POST['delete'])){
        $items->delete();
    } 
   
    if(isset($_POST['edit'])){
        $items->edit();
    } 
   
  