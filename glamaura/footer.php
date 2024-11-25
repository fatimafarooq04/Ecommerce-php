<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        
        <!-- Left Column for GlamAura -->
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold">
                    <span class="text-primary font-weight-bold border border-white px-3 mr-1">Glam</span>Aura
                </h1>
            </a>
            <?php
            require "connection.php";
            
            $qry = "SELECT * FROM `contacttext`";
            $result = mysqli_query($conn, $qry);
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <p><?php echo $row['head_p'] ?></p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?php echo $row['head_add'] ?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?php echo $row['head_mail'] ?></p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i><?php echo $row['head_num'] ?></p>
            <?php } ?>
        </div>

        <!-- Centered Empty Space -->
        <div class="col-lg-4 col-md-12 mb-5">
            <!-- This column is intentionally left empty to create space in the center -->
        </div>

        <!-- Right Column for Newsletter -->
        <div class="col-lg-4 col-md-12 mb-5">
            <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
            
            <form action="newsaction.php" method="POST">
                <div class="form-group">
                    <input type="text" name="new_name" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                </div>
                <div class="form-group">
                    <input type="email" name="new_mail" class="form-control border-0 py-4" placeholder="Your Email" required="required" />
                </div>
                <div>
                    <button class="btn btn-primary btn-block border-0 py-3" name="sub" type="submit">Subscribe Now</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>
