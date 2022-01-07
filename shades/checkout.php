<?php 
session_start();
include_once 'controllers/cart.php';
include_once 'controllers/o.php';
$t = 0; 
?>

        <?php include_once 'templates/header.php'; ?>

        <div class="section">
            <div class="container">
                <div class="row">
                <form action="" method="POST">
                    <div class="col-md-7">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Billing address</h3>
                            </div>
                            <div class="form-group">
                                <input required class="input" type="text" name="name" placeholder="First Name">
                            </div>

                            <div class="form-group">
                                <input required class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input required class="input" type="text" name="address" placeholder="Address">
                            </div>

                            <div class="form-group">
                                <input required class="input" type="tel" name="phone" placeholder="Telephone">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5 order-details">
                        <div class="section-title text-center">
                            <h3 class="title">Your Order</h3>
                        </div>
                        <div class="order-summary">
                            <div class="order-col">
                                <div><strong>PRODUCT</strong></div>
                                <div><strong>TOTAL</strong></div>
                            </div>
                            <div class="order-products">
                                <?php
                                $cartItem =  $cartItems->showCart();
                                foreach ($cartItem as $row => $x) {
                                    ?>
                                <div class="order-col">
                                    <div><?php echo $x["q"] ?>x <?php echo $x["name"] ?></div>
                                    <form action="" method="POST">
                                        <input type="hidden" name="delete_id" value="<?php echo $x["cart_id"]; ?>">
                                        <button type="submit" name="delete" class="btn btn-danger"><span>x</span></button>
                                    </form>
                                    <div>€ <?php echo $x["price"]*$x["q"] ?></div>
                                </div>
                                <?php $t = $t + ($x["price"]*$x["q"]); ?>
                                <?php
                                }
                                    ?>

                            </div>
                            <div class="order-col">
                                <div><strong>TOTAL</strong></div>
                                <div><strong class="order-total">€ <?php echo $t; ?></strong></div>
                            </div>
                        </div>
                        <input type="hidden" value="<?php echo $t; ?>" name="total">
                        <button type="submit" name ="submit"  class="primary-btn order-submit">Place order</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br>
        <?php include_once 'templates/footer.php'; ?>

    </body>

</html>