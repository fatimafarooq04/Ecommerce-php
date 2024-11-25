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
            $updqry = "SELECT * FROM `contacttext` where head_id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="head_1" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_1'] ?>" placeholder="Enter Your Head1" class="form-input"><br>

              <input type="text" name="head_p" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_p'] ?>" placeholder="Enter Para" class="form-input"><br>

              <input type="text" name="head_2" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_2'] ?>" placeholder="Enter Your Head2" class="form-input"><br>

                <input type="text" name="head_add" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_add'] ?>" placeholder="Enter Address" class="form-input"><br>

                <input type="email" name="head_mail" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_mail'] ?>" placeholder="Enter Address" class="form-input"><br>

                <input type="number" name="head_num" class="form-control" id="floatingPassword"
                value="<?php echo $row['head_num'] ?>" placeholder="Enter Address" class="form-input"><br>
            
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
$head_1 = $_POST['head_1'];
  $head_p = $_POST['head_p'];
  $head_2 = $_POST['head_2'];
  $head_add = $_POST['head_add'];
 $head_mail = $_POST['head_mail'];
 $head_num = $_POST['head_num'];
 
  // $con_id = $_POST['feeback'];


//   $imagename = $prod_image['name'];
//   $actualpath = $prod_image['tmp_name'];
//   $mypath = "makeupimages/".$imagename;

//   move_uploaded_file($actualpath, $mypath);

  $upd_qry = "UPDATE `contacttext` SET `head_1`='$head_1', `head_p`='$head_p', `head_2`='$head_2',  `head_add`='$head_add', `head_mail`='$head_mail', `head_num`='$head_num' WHERE head_id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Update Successful');
      window.location.href ='showtext.php';
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