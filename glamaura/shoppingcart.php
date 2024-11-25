<?php
require "header.php";
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <!-- <?php if (!isset($_SESSION['userimage'])) { ?>
            <div class="alert alert-danger" role="alert">To place your order you need to login first <button
                    class="btn btn-danger"><a href="login.php" style="text-decoration: none;">login</a> </button></div>
            <?php
        } else {
            ?> -->
            <div class="col-lg-8 table-responsive mb-5">

                <form method='post' action=''>

                    <table class="table table-bordered text-center mb-0">
                        <thead class="bg-secondary text-dark">
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                        <?php
                        if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                      
                        
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $serial_No = $key + 1;

                                echo"
                            <tr>
                            <td> $serial_No</td>
                                            <td>$value[Item_Name]</td>
                                            <td>$value[Price]<input type='hidden' class='item_price' value='$value[Price]'</td>
                                                <td>
                                                <form action='manage_cart.php' method='post'>
                                                <input class='text-center item_quantity' type='number' value='$value[Quantity]' name='prod_quanttity' onchange='this.form.submit()' min='1' max='10'>
                                                <input type='hidden' name='Item_Name' value='$value[Item_Name]'/>
                                                </form>
                                <td class='align-middle'><img src='img/cat-1.jpg' alt=' style='width: 50px;'>
                                    cat
                                </td>
                                <td class='align-middle'>
                                    100
                                </td>
                                <td class='align-middle'>
                                    <div class='input-group quantity mx-auto' style='width: 100px;'>
                                        <div class='input-group-btn'>
                                            <button class='btn btn-sm btn-primary btn-minus' name='sub_quantity'>
                                                <i class='fa fa-minus'></i>
                                            </button>
                                        </div>
                                        <input type='text' class='form-control form-control-sm bg-secondary text-center'
                                            value='1'>
                                        <div class='input-group-btn'>
                                            <button class='btn btn-sm btn-primary btn-plus' name='add_quantity'>
                                                <i class='fa fa-plus'></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class='align-middle'>
                                    100
                                </td>

                                <!-- Removing -->
                                <td class='align-middle'>
                                    <input type='hidden' name='id' value=' />
                                    <button class='btn btn-sm btn-primary' name='remove' type='submit'>
                                        <i class='fa fa-times'></i>
                                    </button>
                                </td>
                                <!-- Removing -->
                            </tr>";
                        }
                    }
                    else {
                         echo "<tr><td colspan='4'><b>No items in cart</b><td></tr>";
                    }
                    ?>
                        </tbody>
                    </table>

                </form>
            </div>
            <div class="col-lg-4">

                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium">$150</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold">$160</h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    <!-- <?php }
        ?> -->
</div>

<!-- Cart End -->

<?php
require "footer.php";
?>