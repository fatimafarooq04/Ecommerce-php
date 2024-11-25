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
            $updqry = "SELECT * FROM `abouttext` where ab_id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="ab_head1" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_head1'] ?>" placeholder="Enter Your Head 1" class="form-input"><br>

              <input type="text" name="ab_para1" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_para1'] ?>" placeholder="Enter Para 1" class="form-input"><br>

              <input type="text" name="ab_head2" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_head2'] ?>" placeholder="Enter Your Head2" class="form-input"><br>

                <input type="text" name="ab_para2" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_para2'] ?>" placeholder="Enter Para 2" class="form-input"><br>

                <input type="text" name="ab_point1" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_point1'] ?>" placeholder="Enter Point 1" class="form-input"><br>

                <input type="text" name="ab_point2" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_point2'] ?>" placeholder="Enter Point 2" class="form-input"><br>

                <input type="text" name="ab_point3" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_point3'] ?>" placeholder="Enter Point 3" class="form-input"><br>

                <input type="text" name="ab_point4" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_point4'] ?>" placeholder="Enter Point 4" class="form-input"><br>

                <input type="text" name="ab_head3" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_head3'] ?>" placeholder="Enter Your Head 3" class="form-input"><br>

                <input type="text" name="ab_para3" class="form-control" id="floatingPassword"
                value="<?php echo $row['ab_para3'] ?>" placeholder="Enter Para 3" class="form-input"><br>
            
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
$ab_head1 = $_POST['ab_head1'];
  $ab_para1 = $_POST['ab_para1'];
  $ab_head2 = $_POST['ab_head2'];
  $ab_para2 = $_POST['ab_para2'];
 $ab_point1 = $_POST['ab_point1'];
 $ab_point2 = $_POST['ab_point2'];
 $ab_point3 = $_POST['ab_point3'];
 $ab_point4 = $_POST['ab_point4'];
 $ab_head3 = $_POST['ab_head3'];
 $ab_para3 = $_POST['ab_para3'];
 
  // $con_id = $_POST['feeback'];


//   $imagename = $prod_image['name'];
//   $actualpath = $prod_image['tmp_name'];
//   $mypath = "makeupimages/".$imagename;

//   move_uploaded_file($actualpath, $mypath);

  $upd_qry = "UPDATE `abouttext` SET `ab_head1`='$ab_head1', `ab_para1`='$ab_para1', `ab_head2`='$ab_head2',  `ab_para2`='$ab_para2', `ab_point1`='$ab_point1', `ab_point2`='$ab_point2', `ab_point3`='$ab_point3', `ab_point4`='$ab_point4', `ab_head3`='$ab_head3', `ab_para3`='$ab_para3' WHERE ab_id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Update Successful');
      window.location.href ='showabout.php';
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