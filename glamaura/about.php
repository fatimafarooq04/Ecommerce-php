	
	<?php
require "header.php"
	?>

	<!-- / body -->

	<div id="body">
	<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">About Us</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">About</p>
        </div>
    </div>
</div>
		<div class="container">
			<div id="content" class="full">
			<?php
      require "connection.php";
      
      $qry= "SELECT * FROM `abouttext`";
      $result =mysqli_query($conn, $qry);
      while($row= mysqli_fetch_assoc($result)){

        ?>
				<h1><?php echo $row['ab_head1'] ?></h1>
				<div class="entry">
					<p><?php echo $row['ab_para1'] ?></p>
					<h2><?php echo $row['ab_head2'] ?></h2>
					<p><?php echo $row['ab_para2'] ?></p>
					<ol>
						<li><?php echo $row['ab_point1'] ?></li>
						<li><?php echo $row['ab_point2'] ?></li>
						<li><?php echo $row['ab_point3'] ?></li>
						<li><?php echo $row['ab_point4'] ?></li>
					</ol>
					<h2><?php echo $row['ab_head3'] ?></h2>
					<p><?php echo $row['ab_para3'] ?></p>
				</div>
		
			</div>
			<!-- / content -->
		</div>
		<!-- / container -->
		<?php } ?>
	</div>
	<!-- / body -->

	
	
	<?php
require "footer.php"
	?>