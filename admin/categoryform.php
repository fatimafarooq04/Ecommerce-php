<?php
require "header.php"
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
                        <form action="#" method='POST' enctype='multipart/form-data'>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="categoryname">
                            <label for="floatingInput">categoryname name</label>
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


<?php  
require "connection.php";
if (isset($_POST['sub'])) {
$categoryname =$_POST['categoryname'];
$Insert_qry="INSERT INTO `categories`( `cat_name`) VALUES ('$categoryname')";
$res= mysqli_query($conn,$Insert_qry);
echo "<script>
alert('category added Successfully');
window.location.href='categoryform.php';
</script> ";
}
?>