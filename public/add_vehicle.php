<?php include '../includes/header.php'; ?>

<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
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
$Reg_no = $status = $engine_no = $make = "";
$model = $year = $color = $customer_id =$customer_concern= "";
$d_date = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Reg_no = $_POST["Reg_no"];
  $status = $_POST["status"];
  $engine_no = $_POST["engine_no"];
  $make  = $_POST["make"];
  $model = $_POST["model"];
  $year = $_POST["year"];
  $color = $_POST["color"];
  $d_date = $_POST["d_date"];
  $customer_mail =$_SESSION['email'];
  $customer_concern = $_POST["customer_concern"];
  $date = date("Y-m-d");
  $user = $_SESSION['username'];
}

?>
<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Reg_no</label>
        <div class="col-sm-8">
            <input type="text" name="Reg_no" class="form-control1" id="focusedinput" placeholder="Eg KAZ 1234N" required>
        </div>
    </div>

    <div class="form-group">￼	￼
        <label for="focusedinput" class="col-sm-2 control-label">status</label>
        <div class="col-sm-8">
            <input type="text"  name="status" class="form-control1" id="focusedinput" placeholder="Eg Pending Spares" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Engine_no</label>
        <div class="col-sm-8">
            <input type="text" name="engine_no" class="form-control1" id="focusedinput" placeholder="Eg 3461716127" required>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Make</label>
        <div class="col-sm-8">
            <input type="text" name="make" class="form-control1" id="focusedinput" placeholder="Eg Toyota" required>
        </div>

    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Model </label>
        <div class="col-sm-8">
            <input type="text" name="model" class="form-control1" id="focusedinput" placeholder="Eg love four" required>
        </div>
        
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Year</label>
        <div class="col-sm-8">
            <input type="text" name="year" class="form-control1" id="focusedinput" placeholder="Eg 2006" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Year of manufacture</p>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Color</label>
        <div class="col-sm-8">
            <input type="text" name="color" class="form-control1" id="focusedinput" placeholder="eg Black" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Body color</p>
        </div>
    </div>

    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Customer_concern</label>
        <div class="col-sm-8">
            <input type="text" name="customer_concern" class="form-control1" id="focusedinput" placeholder="eg Painting" required>
        </div>
        <div class="col-sm-2">
            <p class="help-block">Problem of the car</p>
        </div>
    </div>

       <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Delivery Date</label>
        <div class="col-sm-8">
            <input type="text" name="d_date" class="form-control1" id="focusedinput" placeholder="DD/MM/YYYY" required>
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

    $query = "INSERT INTO vehicle_details (Reg_no,status_,engine_no,make,model,year_,color,customer_concern,arrival_date,delivery_date,added_by,customer_mail)

    VALUES ('{$Reg_no}','{$status}','{$engine_no}','{$make}','{$model}','{$year}','{$color}','{$customer_concern}','{$date}','{$d_date}','{$user}','{$customer_mail}')";

        $results = mysqli_query($con, $query);
        confirm_query($results);

        if ($results) {
            header("Location: manage_vehicles.php");
        }else {
        echo ' <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert"
                aria-hidden="true">
                &times;
                </button>
                vehicle addition failed.<a href="add_vehicle.php">Try Again</a>
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
	 <p>© 2018-<?php echo date("Y"); ?>Car Garage. All Rights Reserved </p>
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