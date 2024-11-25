<?php
session_start();
if ($_SESSION['role'] == "admin") {

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DASHMIN - Bootstrap Admin Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-oC/p51Y5P7J1q9teFqsG2zUKtkxjv3+yoS7A0FQH+K1xNLXHH9BYiGjDZMz2sXZg" crossorigin="anonymous">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <div class="container-xxl position-relative bg-white d-flex p-0">
            <!-- Spinner Start -->
            <div id="spinner"
                class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
            </div>
            <!-- Spinner End -->


            <!-- Sidebar Start -->
            <div class="sidebar pe-4 pb-3">
                <nav class="navbar bg-light navbar-light">
                    <a href="index.php" class="navbar-brand mx-4 mb-3">
                        <h3 style="color: #F28123;"><i class="fa fa-hashtag me-2"></i>Glam Aura</h3>
                    </a>
                    <div class="d-flex align-items-center ms-4 mb-4">
                        <div class="position-relative">
                            <img class="rounded-circle" src="<?php echo $_SESSION['img'] ?>" alt=""
                                style="width: 40px; height: 40px;">
                            <div
                                class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                            </div>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0">
                                <?php echo $_SESSION['name'] ?>
                            </h6>
                            <span>
                                <?php echo $_SESSION['role'] ?>
                            </span>
                        </div>
                    </div>
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-file-alt"></i>Forms</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="signup.php" class="dropdown-item">Sign up</a>
                                <a href="login.php" class="dropdown-item">Login</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-laptop category-icon"></i>Home</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="addservice.php" class="dropdown-item">Add Service</a>
                                <a href="showservice.php" class="dropdown-item">show Service</a>
                                <a href="addcard.php" class="dropdown-item">Add Card</a>
                                <a href="showcard.php" class="dropdown-item">Show Card</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-laptop category-icon"></i>Categories</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="categoryform.php" class="dropdown-item">category form</a>
                                <a href="categoryshow.php" class="dropdown-item">show category</a>
                                <a href="blank.html" class="dropdown-item">Blank Page</a>
                            </div>
                        </div>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-cube"></i>product type</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="producttypeadd.php" class="dropdown-item">Add product type</a>
                                <a href="producttypeshow.php" class="dropdown-item">show product type</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-box item-icon"></i>add product items</a>
                            <div class="dropdown-menu bg-transparent border-0">
                            <a href="productadd.php" class="dropdown-item">Add  product</a>
                            <a href="productshow.php" class="dropdown-item">show  product</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-box item-icon"></i>About items</a>
                            <div class="dropdown-menu bg-transparent border-0">
                            <a href="addabout.php" class="dropdown-item">Add About</a>
                            <a href="showabout.php" class="dropdown-item">Show About</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-box item-icon"></i>Contact items</a>
                            <div class="dropdown-menu bg-transparent border-0">
                            <a href="showcontact.php" class="dropdown-item">show contact</a>
                            <a href="addtext.php" class="dropdown-item">Add text</a>
                            <a href="showtext.php" class="dropdown-item">show text</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-laptop category-icon"></i>Sessions</a>
                            <div class="dropdown-menu bg-transparent border-0">
                                <a href="showsignup.php" class="dropdown-item">Show Signp</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-box item-icon"></i>News Form</a>
                            <div class="dropdown-menu bg-transparent border-0">
                            <a href="shownews.php" class="dropdown-item">Show News</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->


            <!-- Content Start -->
            <div class="content">
                <!-- Navbar Start -->
                <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                    <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                        <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                    </a>
                    <a href="#" class="sidebar-toggler flex-shrink-0">
                        <i class="fa fa-bars"></i>
                    </a>
                    <form class="d-none d-md-flex ms-4">
                        <input class="form-control border-0" type="search" placeholder="Search">
                    </form>
                    <div class="navbar-nav align-items-center ms-auto">
                        
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="<?php echo $_SESSION['img'] ?>" alt=""
                                    style="width: 40px; height: 40px;">
                                <span class="d-none d-lg-inline-flex">
                                    <?php echo $_SESSION['name'] ?>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                <a href="updateprofile.php" class="dropdown-item">Edit Profile</a>
                                <a href="logout.php" class="dropdown-item">Log Out</a>
                            </div>
                        </div>
                    </div>
                </nav>
                <!-- Navbar End -->

                <?php
} else {
    header("location:login.php");
}
?>