<?php
  include 'header.php';
  $id=$_REQUEST['id'];
  $data=mysqli_query($con, "select * from city_master where ct_id=".$id);
  $row=mysqli_fetch_array($data);
?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-12 col-12 mb-1">
            <h3 class="content-header-title mb-0">Update State</h3>
          </div>
        </div>
        <div class="content-body">
          <section class="input-validation">
          	<div class="row">
          		<div class="col-md-12">
          			<div class="card">
          				<div class="card-content collapse show">
          					<div class="card-body">
          						<form class="form-horizontal" action="city_update1.php?id=<?php echo $id; ?>" method="post" novalidate>
          							<div class="row">
          								<div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <h5>State <span class="required">*</span></h5>
                              <div class="controls">
                                <select class="form-control" id="basicSelect" name="stat" required data-validation-required-message="Enter State Name">
                                  <option selected disabled>Select Option</option>
                                <?php
                                  $state=mysqli_query($con, "select * from state_master order by st_id desc");
                                  while($stat=mysqli_fetch_array($state))
                                  {
                                ?>
                                  <option <?php if($stat['st_id']==$row['st_id']) {echo "selected";} ?> value="<?php echo $stat['st_id']; ?>"><?php echo $stat['st_name']; ?></option>
                                <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-12">
          									<div class="form-group">
          										<h5>City<span class="required">*</span></h5>
          										<div class="controls">
          											<input type="text" name="city" class="form-control" placeholder="Enter City Name" value="<?php echo $row['ct_name']; ?>" required data-validation-required-message="This field is required">
          										</div>
          									</div>
                        </div>
                           <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                              <h5>PIN<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="text" name="pin" class="form-control" placeholder="Enter PIN Number" value="<?php echo $row['ct_pin']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                        </div>


          								<div class="col-lg-6 col-md-12">
          									<div class="text-right" style="margin-top:20px;">
          										<button type="submit" name="add" class="btn btn-success">Submit <i class="fa fa-thumbs-o-up position-right"></i></button>
          										<a href="city.php" class="btn btn-danger">Go Back !</a>
          									</div>
          								</div>
          							</div>
          						</form>
          					</div>
          				</div>
          			</div>
          		</div>
          	</div>
          </section>
        </div>
      </div>
    </div>
<?php include 'footer.php'; ?>
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>