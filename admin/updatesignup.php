<?php
require "header.php";
?>


<div class="container-fluid">
  <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
      <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Update Signup Form</h3>
          </a>

        </div>
        <div class="form-floating mb-3">
          <form action="#" method="POST" enctype="multipart/form-data">
            <?php
            require "connection.php";
            $prodid = $_GET['updid'];
            $updqry = "SELECT * FROM `admin` where id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="firstname" class="form-control" id="floatingPassword"
                value="<?php echo $row['firstname'] ?>" placeholder="Enter Your First Name" class="form-input"><br>

              <input type="text" name="lastname" class="form-control" id="floatingPassword"
                value="<?php echo $row['lastname'] ?>" placeholder="Enter Your Last Name" class="form-input"><br>

              <input type="email" name="email" class="form-control" id="floatingPassword"
                value="<?php echo $row['email'] ?>" placeholder="Enter Your Email Address" class="form-input"><br>

                <input type="password" name="password" class="form-control" id="floatingPassword"
                value="<?php echo $row['password'] ?>" placeholder="Enter Your Password" class="form-input"><br>

                <input type="text" name="userrole" class="form-control" id="floatingPassword"
                value="<?php echo $row['userrole'] ?>" placeholder="Enter Your Password" class="form-input"><br>

                <input type="file" name="userimage" class="form-control" id="floatingPassword"
                value="<?php echo $row['userimage'] ?>" placeholder="Enter Your Updated Image" class="form-input"><br>
            
              <button type="submit" name="sub" class="btn-update btn btn-primary py-3 w-100 mb-4"> Update</button>

              <?php
            }
            ?>
          </form>
        </div>
      </div>
    </div>

  </div>
</div>

<?php
if (isset($_POST['sub'])) {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $userrole = $_POST['userrole'];
  $userimage = $_FILES['userimage'];

  $imagename = $userimage['name'];
  $actualpath = $userimage['tmp_name'];
  $mypath = "../admin/signupimg/".$imagename;

  move_uploaded_file($actualpath, $mypath);

  $upd_qry = "UPDATE `admin` SET `firstname`='$firstname', `lastname`='$lastname', `email`='$email', `password`='$password', `userrole`='$userrole', `userimage`='$mypath'  WHERE id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Updated Successful');
      window.location.href ='showsignup.php';
      </script>";
}

// echo "<script>
// alert('Added Successfully');
// window.location.href='login.php';
// </script> ";
?>
<?php
require "footer.php"
  ?>