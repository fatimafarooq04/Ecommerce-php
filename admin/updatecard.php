<?php
require "header.php";
?>

<div class="container-fluid">
  <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
      <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Update Card Form</h3>
          </a>
        </div>
        <div class="form-floating mb-3">
          <form action="#" method="POST" enctype="multipart/form-data">
            <?php
            require "connection.php";
            $prodid = $_GET['updid'];
            $updqry = "SELECT * FROM `h_card` WHERE c_id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="file" name="c_img" class="form-control" id="c_img" value="<?php echo $row['c_img']; ?>" placeholder="Enter Your Img"><br>
              <input type="text" name="c_text" class="form-control" id="c_text" value="<?php echo $row['c_text']; ?>" placeholder="Enter Your Text"><br>
              <input type="text" name="c_price" class="form-control" id="c_price" value="<?php echo $row['c_price']; ?>" placeholder="Enter Your Price"><br>
              <input type="text" name="c_desc" class="form-control" id="c_price" value="<?php echo $row['c_desc']; ?>" placeholder="Enter Your Desc"><br>
              <button type="submit" name="sub" class="btn-update btn btn-primary py-3 w-100 mb-4">Update</button>
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
    $c_img = $_FILES['c_img'];
    $imagename = $c_img['name'];
    $imageFileType = strtolower(pathinfo($imagename, PATHINFO_EXTENSION));

    // Check if the file is a valid image format
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "<script>alert('Sorry, only JPG, JPEG, and PNG files are allowed.')</script>";
    } else {
        $actualpath = $c_img['tmp_name'];
        $mypath = "cardimg/" . $imagename;
        move_uploaded_file($actualpath, $mypath);

        $c_text = $_POST['c_text'];
        $c_price = $_POST['c_price'];
        $c_desc = $_POST['c_desc'];

        $upd_qry = "UPDATE `h_card` SET `c_img`=?, `c_text`=?, `c_price`=?, `c_desc`=? WHERE c_id=?";
        $stmt = mysqli_prepare($conn, $upd_qry);
        mysqli_stmt_bind_param($stmt, "ssssi", $mypath, $c_text, $c_price, $c_desc, $prodid);
        mysqli_stmt_execute($stmt);

        echo "<script>
              alert('Updated Successful');
              window.location.href ='showcard.php';
              </script>";
    }
}
?>

<?php
require "footer.php";
?>
