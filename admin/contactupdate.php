<?php
require "header.php";
?>


<div class="container-fluid">
  <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
      <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Update Contact Form</h3>
          </a>

        </div>
        <div class="form-floating mb-3">
          <form action="#" method="POST" enctype="multipart/form-data">
            <?php
            require "connection.php";
            $prodid = $_GET['updid'];
            $updqry = "SELECT * FROM `feedback` where con_id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="con_name" class="form-control" id="floatingPassword"
                value="<?php echo $row['con_name'] ?>" placeholder="Enter Your Name" class="form-input"><br>

              <input type="text" name="con_mail" class="form-control" id="floatingPassword"
                value="<?php echo $row['con_mail'] ?>" placeholder="Enter Mail" class="form-input"><br>

              <input type="text" name="con_sub" class="form-control" id="floatingPassword"
                value="<?php echo $row['con_sub'] ?>" placeholder="Enter Subject" class="form-input"><br>

                <input type="text" name="con_msg" class="form-control" id="floatingPassword"
                value="<?php echo $row['con_msg'] ?>" placeholder="Enter Message" class="form-input"><br>
            
              <button type="submit" name="upd" class="btn-update btn btn-primary py-3 w-100 mb-4"> Update</button>

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
if (isset($_POST['upd'])) {
  $con_name = $_POST['con_name'];
  $con_mail = $_POST['con_mail'];
  $con_sub = $_POST['con_sub'];
  $con_msg = $_POST['con_msg'];
  // $con_id = $_POST['feeback'];


//   $imagename = $prod_image['name'];
//   $actualpath = $prod_image['tmp_name'];
//   $mypath = "makeupimages/".$imagename;

//   move_uploaded_file($actualpath, $mypath);

  $upd_qry = "UPDATE `feedback` SET `con_name`='$con_name', `con_mail`='$con_mail', `con_sub`='$con_sub',  `con_msg`='$con_msg', `con_id`='$con_id' WHERE con_id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Update Successful');
      window.location.href ='showcontact.php';
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