<?php
require "header.php";
?>


<div class="container-fluid">
  <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
      <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
        <div class="d-flex align-items-center justify-content-between mb-3">
          <a href="index.html" class="">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Product type update form</h3>
          </a>

        </div>
        <div class="form-floating mb-3">
          <form action="#" method="POST" enctype="multipart/form-data">
            <?php
            require "connection.php";
            $prodid = $_GET['updid'];
            $updqry = "SELECT * FROM `product_type` where id= $prodid";
            $result = mysqli_query($conn, $updqry);
            while ($row = mysqli_fetch_assoc($result)) {
              ?>
              <input type="text" name="product_type" class="form-control" id="floatingPassword"
                value="<?php echo $row['product_type'] ?>" placeholder="Enter product Name" class="form-input"><br>
              <div class="form-floating mb-4">

                <select class="form-select" aria-label="Default select example" name="category">
                  <?php
                  require "connection.php";
                  $qry = "SELECT * FROM `categories`";
                  $res = mysqli_query($conn, $qry);

                  while ($opt = mysqli_fetch_assoc($res)) {

                    ?>
                    <option value="<?php echo $opt['cat_id'] ?>">
                      <?php echo $opt['cat_name'] ?>
                    </option>

                    <?php

                  } ?>
                </select>
              </div>
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
  $product_type = $_POST['product_type'];
  $cat_id = $_POST['category'];

  $upd_qry = "UPDATE `product_type` SET `product_type`='$product_type',`cat_id`='$cat_id' WHERE id=$prodid";


 

  $result = mysqli_query($conn,$upd_qry);
  echo "<script>
      alert('Update Successful');
      window.location.href ='producttypeshow.php';
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