<?php
require "header.php";
?>


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Home Card Detail</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Card Detail</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <?php
        require "../admin/connection.php";
        $shopid = $_GET['shop'];
        $qry = "SELECT * FROM `h_card` where c_id= $shopid";
        $result = mysqli_query($conn, $qry);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-5 pb-5">


                <img class="w-100 h-100" src="../admin/<?php echo $row['c_img']; ?>" alt="Image">


            </div>

            <div class="col-lg-7 pb-5" style=" margin-top: 150px;">
                <h3 class="font-weight-semi-bold">
                    <?php echo $row['c_text']; ?>
                </h3>
                <h3 class="font-weight-semi-bold mb-4">
                    <?php echo $row['c_price']; ?>
                </h3>
                <p class="mb-4">
                    <?php echo $row['c_desc']; ?>
                </p>


                <div class="d-flex align-items-center mb-4 pt-2">
                    <div class="input-group quantity mr-3" style="width: 130px;">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-minus">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control bg-secondary text-center" value="1">
                        <div class="input-group-btn">
                            <button class="btn btn-primary btn-plus">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </div>
                <div class="d-flex pt-2">
                    <p class="text-dark font-weight-medium mb-0 mr-2">Share on:</p>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>
<!-- Shop Detail End -->






<?php
require "footer.php";
?>