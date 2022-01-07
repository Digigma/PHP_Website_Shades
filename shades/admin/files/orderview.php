<?php
session_start();
$id = $_GET['id'];
$total = $_GET['total'];
include_once './controllers/orders.php';
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
                                    <h5 class="card-title">Order Items</h5>
                                    <div class="table-responsive">
                                        <table class="table  table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Item</th>
                                                    <th>quantity</th>
                                                    <th>P Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            require_once "config.php";
                                            $sr = 1;
                                            $itemsOrder = $orders->items();
                                            foreach ($itemsOrder as $row => $x) {
                                                    ?>

                                                <tr>
                                                    <td><?php echo $sr; $sr++; ?></td>
                                                    <td><?php echo $x["name"]; ?></td>
                                                    <td><?php echo $x["purchasing_price"]; ?></td>
                                                    <td><?php echo $x["qty"]; ?></td>
                                                    <td><?php echo $x["qty"]*$x["purchasing_price"]; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Sr.No</th>
                                                    <th>Item</th>
                                                    <th>quantity</th>
                                                    <th>P Price</th>
                                                    <th>Total</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br><br><br><br><br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>