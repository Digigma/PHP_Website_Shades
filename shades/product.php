<?php 
session_start();
$session_id = session_id();
include_once 'controllers/p.php';
include_once 'controllers/add.php';
?>

        <?php include_once 'templates/header.php'; ?>
        <div class="section">
            <div class="container">
                <div class="row">

                    <?php
                    $s =  $onlyproduct->onlyproduct();
                    foreach ($s as $row => $x) {
                    ?>
                    <div class="col-md-4 col-md-push-2">
                        <div id="product-img">
                            <div class="product-preview">
                                <img src="./admin/images/<?php echo $x["img"] ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2  col-md-pull-5"></div>
                    <div class="col-md-5" style="padding-top: 70px;">
                        <div class="product-details">
                            <h2 class="product-name"><?php echo $x["name"] ?> </h2>
                            <div>
                                10 Review(s) | Add your review
                            </div>
                            <div>
                                <h3 class="product-price">
                                € <?php echo $x["price"] ?>
                                </h3>
                            </div>
                            <p><?php echo $x["description"] ?></p>
                        </div>
                        <form action="" method="POST">
                            <input type="hidden" name="id" value="<?php echo $x['id']; ?>">
                            <input type="hidden" name="price" value="<?php echo $x['price']; ?>">
                            <input type="hidden" name="session_id" value="<?php echo $session_id; ?>">

                            <button  type="submit" name="submit" class="cart_btn">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>

                    <?php
                    }

                    ?>
                </div>
            </div>
        </div>
        <br><br>
        <?php include_once 'templates/footer.php'; ?>

    </body>

</html>