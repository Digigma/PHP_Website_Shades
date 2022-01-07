<?php
session_start();
require_once ('config.php');
$id = $_GET['id'];
include_once './controllers/item.php';
if(!isset($_SESSION["admin"]) && $_SESSION["admin"] !== true){
    header("location: ../index.php");
    exit;
}
?>

    <?php include ('templates/admin-header.php'); ?>
        <div id="main-wrapper">
            <div>
                <div class="page-breadcrumb">
                    <div class="row">
                        <div class="col-12 d-flex no-block align-items-center">
                            <h4 class="page-title">Edit Product</h4>
                            <div class="ml-auto text-right">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <?php
                                        $products = $items->singleitem();
                                        foreach ($products as $row => $link) {
                                            ?>
                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Product
                                                Name</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" placeholder="Name Here"
                                                    value="<?php echo $link["name"]; ?>" name="name" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Product
                                                Price</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Product Price " value="<?php echo $link["price"]; ?>"
                                                    name="price" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-md-4 text-right control-label col-form-label">Product Quantity
                                            </label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="quantity"
                                                    placeholder="Product Quantity" value="<?php echo $link["quantity"]; ?>"
                                                    required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="fname"
                                                class="col-sm-4 text-right control-label col-form-label">Product
                                                Description</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="description" rows="4" name="description"
                                                    required><?php echo $link["description"]; ?>
                                                </textarea>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-md-4 text-right control-label col-form-label">Product Image
                                            </label>
                                            <div class="col-md-8">
                                                <input type="file" class="form-control" name="image" accept="image/*">
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                    <div class="border-top">
                                        <div class="card-body text-right">
                                            <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>