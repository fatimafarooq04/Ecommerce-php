<?php
session_start();
include('../admin/connection.php');
$q = "select * from categories";
$res = mysqli_query($conn, $q);
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Glam Aura</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #card1{
            height:300px;
        }
        .navbar{
            height:30px;
        }
      
        </style>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
       
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span
                            class="text-primary font-weight-bold border px-3 mr-1">Glam</span>Aura</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="shoppingcart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">

            <div class="col-lg-12  pt-3">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span
                                class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <?php while ($data = mysqli_fetch_assoc($res)) { ?>
                                        <a href="shop.php?cid=<?php echo $data['cat_id'] ?>" class="dropdown-item">
                                            <?php echo $data['cat_name'] ?>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>


                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">

                                    <a href="shoppingcart.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="checkout.php" class="dropdown-item">Checkout</a>
                                </div>
                            </div> -->
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                            <div class="navbar-nav ml-auto py-0">
                            <?php
                            if(!isset($_SESSION['userimag'])){?>
                                <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="signup.php" class="nav-item nav-link">Register</a> 
                            <?php
                            } else {?>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['userimag'] ?>" alt="" style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">
                                    <?php echo $_SESSION['name'] ?>
                                </span>
                                </a>
                                
                                <div class="dropdown-menu rounded-0 m-0">
                                <a href="myprofile.php" class="dropdown-item">my profile</a>
                                <a href="updateprofile.php" class="dropdown-item">edit profile</a>

                                <a href="logout.php" class="dropdown-item">Log Out</a>
                                </div>

                                <?php } ?>
                            </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->