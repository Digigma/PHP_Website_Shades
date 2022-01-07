<?php
session_start();
require_once ('config.php');
include_once './controllers/item.php';
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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table  table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Description</th>
                                                    <th>Image</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $items = $items->showitems();
                                                foreach ($items as $row => $x) { ?>

                                                <tr>
                                                    <td><?php echo $x["name"]; ?></td>
                                                    <td><?php echo $x["price"]; ?></td>
                                                    <td><?php echo $x["quantity"]; ?></td>
                                                    <td><?php echo $x["description"]; ?></td>
                                                    <td><img src="../images/<?php echo $x["img"]; ?>" alt="" width="70px" height="60px"></td>
                                                    <td>
                                                        <a href="edit.php?id=<?php echo $x["id"]; ?>">
                                                            <button class="btn btn-warning"><span>Edit</span></button>
                                                        </a>
                                                    </td>

                                                    <td>
                                                        <form action="" method="POST">
                                                            <input type="hidden" name="delete_id" value="<?php echo $x["id"]; ?>">
                                                            <button type="submit" name="delete" class="btn btn-danger">
                                                                <span>Delete</span>
                                                            </button>
                                                        </form>

                                                    </td>
                                                </tr>

                                                <?php } ?>
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>