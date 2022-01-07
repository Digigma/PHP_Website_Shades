<?php
session_start();
require_once ('config.php');
if(!isset($_SESSION["admin"]) && $_SESSION["admin"] !== true){
    header("location: login.php");
    exit;
}
?>

        <?php include ('templates/admin-header.php'); ?>

        <div id="main-wrapper">
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="mt-4">WELCOME </h1>
                        </div>
                    </div>
                    <div class="container my-sm-2 mx-auto text-center">

                        <a href="./add_item.php"><button class="btn btn-md text-white p-4"
                                style="background-color: #FF4E00;    width: 30%;">Add Product</button></a>
                    </div>
                    <div class="container my-sm-2 mx-auto text-center">

                        <a href="./items.php"><button class="btn btn-md text-white p-4"
                                style="background-color: #FF4E00;    width: 30%;">Products</button></a>
                    </div>

                    <div class="container my-sm-2 mx-auto text-center">

                        <a href="./orders.php"><button class="btn btn-md text-white p-4"
                                style="background-color: #FF4E00;    width: 30%;">Orders</button></a>
                    </div>
                    <div class="container my-sm-2 mx-auto text-center">

                        <a href="./controllers/logout.php"><button class="btn btn-md text-white p-4"
                                style="background-color: red;    width: 30%;">Logout</button></a>
                    </div>

                </div>

            </div>

        </div>

        <br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>