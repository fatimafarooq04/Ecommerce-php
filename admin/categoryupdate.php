<?php
require "header.php";
?>


<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6">
            <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <a href="index.html" class="">
                        <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Add cosmetic products form</h3>
                    </a>

                </div>
                <div class="form-floating mb-3">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <?php
                        require "connection.php";
                        $prodid = $_GET['updid'];
                        $updqry = "SELECT * FROM `categories` where cat_id= $prodid";
                        $result = mysqli_query($conn, $updqry);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <input type="text" name="cat_name" class="form-control" id="floatingPassword"
                                value="<?php echo $row['cat_name'] ?>" placeholder="Enter product Name"
                                class="form-input"><br>


                            <button type="submit" name="upd" class="btn-update btn btn-primary py-3 w-100 mb-4">
                                Update</button>

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
    $prod_name = $_POST['cat_name'];

    $upd_qry = "UPDATE `categories` SET `cat_name`='$prod_name' WHERE cat_id=$prodid";




    $result = mysqli_query($conn, $upd_qry);
    echo "<script>
      alert('Update Successful');
      window.location.href ='categoryshow.php';
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