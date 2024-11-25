<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- Bootstrap CSS CDN Link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        /* Additional custom styles can be added here if needed */
    </style>
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign Up Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 style="color: #F28123;"><i class="fa fa-hashtag me-2"></i>glam Aura</h3>
                            </a>
                            <h3>Sign Up</h3>
                        </div>
                        <form action="signupaction.php" method="POST" enctype='multipart/form-data'>  
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Text" placeholder="Enter Your First Name" name="firstname" required>
                            <br>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Text" placeholder="Enter Your Last Name" name="lastname" required>
                            <br>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="Input" placeholder="Enter Your Email" name="email" required>
                            <br>
                        </div>
                         <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="Text" placeholder="enter your user role" name="userrole" required>
                            <br>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="Password" placeholder="Enter Your Password" name="pass" required>
                            <br>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control" id="Image" placeholder="Enter Your Image" name="img" required>
                            <br>
                        </div>
                
                       
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="sub">Sign Up</button>
                            <p class="text-center mb-0">Already have an Account? <a href="login.php">Log In</a></p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
    </div>


  