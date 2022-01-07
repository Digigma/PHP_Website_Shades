<?php

    include_once "./config.php";

    class login{
        function check(){
            require "config.php";
            $conn = new PDO($dsn, $username, $password, $options);
          
            $e = $p = "";
            $e_e = $p_e = "";
            if(empty(trim($_POST["email"]))){
                $e_e = "Please enter Email";
                echo $e_e;
            } else{
                $e = trim($_POST["email"]);
            }
            if(empty(trim($_POST["password"]))){
                $p_e = "Please enter your password.";
                echo $p_e;
            } else{
                $p = trim($_POST["password"]);
            }
            if(empty($e_e) && empty($p_e)){
                require "config.php";
                $conn = new PDO($dsn, $username, $password, $options);
            $sql = "SELECT  `email`, `password`, `id` ,`name`   FROM `admin` WHERE email = '$e'"; 
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            foreach($result as $row => $links){
 

              $e =  $links['email'];   
              $p_db = $links['password']; 
              $name_db = $links['name']; 
              
              
              if($p ==  $p_db){
                $_SESSION["admin"] = true;
                $_SESSION["name"] = $name_db;
                header("location: ./index.php");

            } else{
                $p_e = "The password you entered was not valid.";
            }


            }

            }
               
        }
    }
    
    $loginUser = new login;

    if(isset($_POST['submit'])){

        $loginUser->check();
    } 

  