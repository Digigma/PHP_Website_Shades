<?php
session_start();
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
                                    <div class="table-responsive">
                                        <table class="table  table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Total</th>
                                                    <th>View order</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                            require_once "config.php";
                                            $showorders = $orders->order();
                                            foreach ($showorders as $row => $x) {
                                                    ?>

                                                <tr>
                                                    <td><?php echo $x["name"]; ?></td>
                                                    <td><?php echo $x["email"]; ?></td>
                                                    <td><?php echo $x["phone"]; ?></td>
                                                    <td><?php echo $x["address"]; ?></td>
                                                    <td><?php echo $x["total"]; ?></td>
                                                    <td><a href="./orderview.php?id=<?php echo $x["id"]; ?>&total=<?php echo $x["total"]; ?>">View Order</i></a></td>
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

        <br><br><br><br><br><br><br><br><br><br><br>
        <?php include_once '../../templates/footer.php'; ?>

    </body>

</html>