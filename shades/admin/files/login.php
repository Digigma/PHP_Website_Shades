<?php
session_start();
require_once "config.php";
include_once './controllers/login.php';
if(isset($_SESSION["admin"]) && $_SESSION["admin"] === true){
    header("location: ./index.php");
    exit;
}
$e = $p = "";
$e_e = $p_e = "";
?>

        <?php include ('templates/admin-header.php'); ?>
        <div class="main-wrapper">

            <div class="d-flex no-block justify-content-center align-items-center" >

                <div class="auth-box">
                    <div id="loginform">

                        <!-- Form -->
                        <form class="form-horizontal m-t-20" id="loginform" action=""
                            method="POST">
                            <div class="row p-b-30">
                                <div class="col-12">
                                    <p class="btn-danger text-center"><?php echo $e_e ?></p>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Email" aria-label="Username" name="email" aria-describedby="basic-addon1" required="">
                                    </div>

                                    <p class="btn-danger text-center"><?php echo $p_e; ?></p>
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="p-t-20">
                                            <button class="btn btn-success float-right" type="submit" name="submit">Admin Login</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>

        <br><br>

        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>


