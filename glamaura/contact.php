<?php 
require "header.php";
?>

<!-- Add JavaScript Validation -->
<script>
    function validateForm() {
        // Get form values
        var fullname = document.forms["contactForm"]["fullname"].value;
        var email = document.forms["contactForm"]["mail"].value;
        var subject = document.forms["contactForm"]["subj"].value;
        var message = document.forms["contactForm"]["msg"].value;

        // Check if full name contains digits
        if (/\d/.test(fullname)) {
            alert("Full name should not contain digits!");
            return false;
        }


        // Check if subject is empty
        if (subject.trim() === "") {
            alert("Please enter a subject!");
            return false;
        }

        // Check if message is empty
        if (message.trim() === "") {
            alert("Please enter a message!");
            return false;
        }

        return true; // Return true if all validations pass
    }
</script>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Contact Us</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>                
                <form action="contactaction.php" method="POST" name="contactForm" onsubmit="return validateForm();">
                    <input class="form-control" type="text" name="fullname" placeholder="Enter Name"
                        aria-label="default input example"><br>
                    <div class="mb-3">
                        <!-- <label for="exampleFormControlInput1" name="mail" class="form-label">Email address</label> -->
                        <input type="email" class="form-control" name="mail" id="exampleFormControlInput1"
                            placeholder="Enter Email "><br>
                    </div>
                    <input class="form-control" type="text" name="subj" placeholder="Enter Subject"
                        aria-label="default input example"><br>

                        <div class="mb-3">
                            <!-- <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label> -->
                            <textarea class="form-control" placeholder="Enter message" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
                          </div>  <br>
                          <button type="submit" class="btn btn-primary" name="sub">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
        <?php
      require "connection.php";
      
      $qry= "SELECT * FROM `contacttext`";
      $result =mysqli_query($conn, $qry);
      while($row= mysqli_fetch_assoc($result)){

        ?>
            <h5 class="font-weight-semi-bold mb-3"><?php echo $row['head_1'] ?></h5>
            <p><?php echo $row['head_p'] ?></p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3"><?php echo $row['head_2'] ?></h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i><?php echo $row['head_add'] ?></p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i><?php echo $row['head_mail'] ?></p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i><?php echo $row['head_num'] ?></p>
            </div>
            
        </div>
    </div>
    <?php } ?>
</div>
<!-- Contact End -->


<?php
   require "footer.php";
   ?>