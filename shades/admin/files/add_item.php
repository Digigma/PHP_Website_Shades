<?php
session_start();
require_once ('config.php');
include_once './controllers/item.php';
if(!isset($_SESSION["admin"]) && $_SESSION["admin"] !== true){
    header("location: ../index.php");
    exit;
}
?>

    <?php include ('templates/admin-header.php'); ?>
        <div id="main-wrapper">
            <div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" placeholder="Name"
                                                    name="name" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Price</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" placeholder="Price "
                                                    name="price" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-4 text-right control-label col-form-label">Quantity
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="quantity"
                                                    placeholder="Quantity" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Description</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="description" rows="3" name="description"
                                                    required>
                                                </textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-4 text-right control-label col-form-label">Image </label>
                                            <div class="col-md-8">
                                                <input type="file" name="image" accept="image/*" required>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="border-top">
                                        <div class="card-body text-right">
                                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>