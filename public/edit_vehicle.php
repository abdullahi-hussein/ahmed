<?php include '../includes/header.php'; ?>

<!-- banner - ->
<div class = "wthree_agile_admin_info" >
		  <!-- / w3_agileits_top_nav-->
          <!-- /nav-->
          
            <!-- //nav -->
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="index.php">Home</a><span>«</span></li>
									<li>Vehicles</li>
									
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">
					  <h2 class="w3_inner_tittle">Add New Vehicle</h2>

							<!--/forms-->
<div class="forms-main_agileits">


<!--/forms-inner-->
<div class="forms-inner">

        <!--/set-2-->

    <div class="wthree_general graph-form agile_info_shadow ">
            <h3 class="w3_inner_tittle two">Vehicle Details </h3>

            <div class="grid-1 ">
                    <div class="form-body">
<?php 
$vehicle_id = $_REQUEST['id'];
$sel_query = "SELECT * FROM vehicle_details  WHERE vehicle_id = '{$vehicle_id}'; ";
$result_1 = mysqli_query($con, $sel_query);
confirm_query($result_1);
$row = mysqli_fetch_assoc($result_1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Reg_no    = $_POST["Reg_no"];
  $status    = $_POST["status"];
  $engine_no = $_POST["engine_no"];
  $make      = $_POST["make"];
  $model     = $_POST["model"];
  $year      = $_POST["year"];
  $color     = $_POST["color"];
  $d_date    = $_POST["d_date"];
  $customer_concern = $_POST["customer_concern"];
  $date      = date("Y-m-d");
  $user      = $_SESSION['username'];
  $new_id    = $_POST["vehicle_id"];
}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
<input type="hidden" name="vehicle_id" value="<?php echo $row["vehicle_id"]; ?>">
    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Reg_no</label>
        <div class="col-sm-8">
            <input type="text" name="Reg_no" class="form-control1" id="focusedinput" value="<?php echo $row["Reg_no"]; ?>" required>
        </div>
    </div>

    <div class="form-group">￼	￼
        <label for="focusedinput" class="col-sm-2 control-label">status</label>
        <div class="col-sm-8">
            <input type="text"  name="status" class="form-control1" id="focusedinput" value="<?php echo $row["status_"]; ?>" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Engine_no</label>
        <div class="col-sm-8">
            <input type="text" name="engine_no" class="form-control1" id="focusedinput" value="<?php echo $row["engine_no"]; ?>" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Make</label>
        <div class="col-sm-8">
            <input type="text" name="make" class="form-control1" id="focusedinput" value="<?php echo $row["make"]; ?>" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Model </label>
        <div class="col-sm-8">
            <input type="text" name="model" class="form-control1" id="focusedinput" value="<?php echo $row["model"]; ?>" required>
        </div>
        
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Year</label>
        <div class="col-sm-8">
            <input type="text" name="year" class="form-control1" id="focusedinput" value="<?php echo $row["year_"]; ?>" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Year of manufacture</p>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Color</label>
        <div class="col-sm-8">
            <input type="text" name="color" class="form-control1" id="focusedinput" value="<?php echo $row["color"]; ?>" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Body color</p>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Customer_concern</label>
        <div class="col-sm-8">
            <input type="text" name="customer_concern" class="form-control1" id="focusedinput" value="<?php echo $row["customer_concern"]; ?>" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Problem of the car</p>
        </div>
    </div>

       <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Delivery Date</label>
        <div class="col-sm-8">
            <input type="text" name="d_date" class="form-control1" id="focusedinput" value="<?php echo $row["delivery_date"]; ?>" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Date of delivery</p>
        </div>
    </div>


    <button type="submit" class="btn btn-primary btn-flat btn-pri"><i class="fa fa-plus" aria-hidden="true"></i> Submit</button>

</form>
</div>

</div>
</div>
    
<?php 

if (isset($_POST["make"])) {
  $query = "UPDATE vehicle_details SET Reg_no = '{$Reg_no}', status_='{$status}',
  engine_no = '{$engine_no}', year_ = '{$year}', color = '{$color}',customer_concern='{$customer_concern}',
   make = '{$make}', model = '{$model}',delivery_date='{$d_date}',added_by = '{$user}' WHERE vehicle_id = '{$new_id}' ";
  
  $results = mysqli_query($con, $query);
  confirm_query($results);
  
  if ($results) {
      // Redirect user to manage users page on success edit
      header("Location: manage_vehicles.php");
   
  }else {
      echo' <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
      &times;
      </button>
      Erorr while updating record.<a href="manage_vehicles.php">Go Back</a>
      </div>';         
        }
}
?>    
        <!--//set-2-->

        
</div>
<!--//forms-inner-->
</div> 
<!--//forms-->											   


</div>
<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2019-<?php echo date("Y"); ?>Car Garage. All Rights Reserved </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


    </body>
</html>
