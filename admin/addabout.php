<?php
require "header.php"
?>


<div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Add About Form</h3>
                            </a>
                          
                        </div>
                        <form action="aboutaction.php" method='POST' enctype='multipart/form-data'>
                        <div class="form-floating mb-3">
        <input type="text" name="head1" placeholder="Enter Your Head 1 Here"><br>
        <input type="text" name="para1" placeholder="Enter Your Para 1 Here"><br>
        <input type="text" name="head2" placeholder="Enter Your Head 2 Here"><br>
        <input type="text" name="para2" placeholder="Enter Your Para 2 Here"><br>
        <input type="text" name="point1" placeholder="Enter Your Point 1 Here"><br>
        <input type="text" name="point2" placeholder="Enter Your Point 2 Here"><br>
        <input type="text" name="point3" placeholder="Enter Your Point 3 Here"><br>
        <input type="text" name="point4" placeholder="Enter Your Point 4 Here"><br>
        <input type="text" name="head3" placeholder="Enter Your Head 3 Here"><br>
        <input type="text" name="para3" placeholder="Enter Your Para 3 Here"><br>
                        </div>
                       
                        
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="sub">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
<?php
require "footer.php"
?>


