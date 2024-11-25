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
            $updqry = "SELECT * FROM `homeservice` where s_id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="s_quality" class="form-control" id="floatingPassword"
                value="<?php echo $row['s_quality'] ?>" placeholder="Enter Your Service 1" class="form-input"><br>

              <input type="text" name="s_shipping" class="form-control" id="floatingPassword"
                value="<?php echo $row['s_shipping'] ?>" placeholder="Enter Your Service 2" class="form-input"><br>

              <input type="text" name="s_day" class="form-control" id="floatingPassword"
                value="<?php echo $row['s_day'] ?>" placeholder="Enter Your Service 3" class="form-input"><br>

                <input type="text" name="s_support" class="form-control" id="floatingPassword"
                value="<?php echo $row['s_support'] ?>" placeholder="Enter Your Service 4" class="form-input"><br>
            
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
  $s_quality = $_POST['s_quality'];
  $s_shipping = $_POST['s_shipping'];
  $s_day = $_POST['s_day'];
  $s_support = $_POST['s_support'];

  $upd_qry = "UPDATE `homeservice` SET `s_quality`='$s_quality', `s_shipping`='$s_shipping', `s_day`='$s_day', `s_support`='$s_support' WHERE s_id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Updated Successful');
      window.location.href ='showservice.php';
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