<?php
session_start();
include_once 'controllers/s.php';
?>

        <?php include_once 'templates/header.php'; ?>
        <div class="section">
            <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                    <?php
                    $item = $show->show();
                    foreach ($item as $row => $p) {
                        ?>
                        <div class="col-md-3">
                            <div class="product">
                                <a href="./product.php?id=<?php echo $p["id"] ?>">
                                    <div class="product-img">
                                        <img src="./admin/images/<?php echo $p["img"] ?>" alt="">
                                    </div>
                                </a>
                                <div class="product-body">
                                    <h3 class="product-name"><?php echo $p["name"] ?></h3>
                                    <h4 class="product-price pt-5">
                                    € <?php echo $p["price"] ?>
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <?php

                        }

                        ?>

                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <?php include_once 'templates/footer.php'; ?>

    </body>

</html>