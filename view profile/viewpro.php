<?php include 'header.php'; 
     $userid=$_SESSION['userid'];
     $userdata=mysqli_query($con, "select * from user_master where um_id=".$userid);
     $userlog=mysqli_fetch_array($userdata);
?>
<script src="jquery-2.1.1.js"></script>
<script>
  function addMore()
  {
     $("<DIV>").load("input.php", function()
     {
      $("#education").append($(this).html());
     });  
  }
</script>
<script type="text/javascript">
  $(document).ready(function()
  {
    $('#country').on('change',function()
    {
      var countryID = $(this).val();
      if(countryID){
        $.ajax({
          type:'POST',
          url:'ajaxData.php',
          data:'country_id='+countryID,
          success:function(html){
            $('#state').html(html);
            $('#city').html('<option value="">Select State First</option>');
          }
        }); 
      }else{
        $('#state').html('<option value="">Select Country First</option>');
        $('#city').html('<option value="">Select State First</option>');
      }
    });
    $('#state').on('change',function()
    {
      var stateID = $(this).val();
      if(stateID){
        $.ajax({
          type:'POST',
          url:'ajaxData.php',
          data:'state_id='+stateID,
          success:function(html){
            $('#city').html(html);
          }
        }); 
      }else{
        $('#city').html('<option value="">Select State First</option>'); 
      }
    });
  });
</script>

 <form class="form-horizontal" action="viewpro_add.php" method="post" novalidate>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <h2 class="content-header-title mb-0">user profile</h2>
            <div class="row breadcrumbs-top">
            </div>
          </div>
        </div>
        <div class="content-body">
          <section id="card-headings">
          	<div class="row">
          		<div class="col-md-3 col-sm-12">
          			<div class="card">
          				<div class="card-header" id="heading-links"><h3 class="card-title">Personal Details</h3></div>
          				<div class="card-body">
    					      <h5>Name : <span><?php echo $userlog['um_name']." ".$userlog['um_sname']; ?></span></h5>
                    <br>
                    <h5>Contact Number : <span><?php echo $userlog['um_cnct']; ?></span></h5>
                    <br>
                    <h5>Email: <span><?php echo $userlog['um_mail']; ?></span></h5>
                    <br>
                    <h5>Birthdate: <span><?php echo date("d M, Y", strtotime($userlog['um_bdate'])); ?></span></h5>
                    <br>
                    <h5>Gender: <span><?php echo $userlog['um_gen']; ?></span></h5>
          				  <br>
                    <h5>Languages: <span><?php echo $userlog['um_lang']; ?></span></h5>
                   <br>
                   <h5>Linkedin Profile: <span><?php echo $userlog['um_linkedin']; ?></span></h5>
                    <br>
                    <h5>Occupation: <span><?php echo $userlog['um_occp']; ?></span></h5>
                  </div>
          			</div>
          		</div>
          		<div class="col-md-9 col-sm-12">
          			<div class="card">
          				<div class="card-header">
                    <div class="col-md-8 col-sm-12">
            					<h4 class="card-title" id="heading-labels">Educational Details</h4>
            					<a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    </div>
                    <div class="col-md-4 col-sm-12" style="float: right; margin-top: -29px;" align="right">
                      <button type="button" class="btn mr-1 mb-1 btn-outline-primary" data-toggle="modal" data-target="#xlarge">Add New</button>
                    </div>
          				</div>
                  <div class="modal fade text-left" id="xlarge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                      <h4 class="modal-title" id="myModalLabel16">Basic Modal</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <div class="modal-body">
                        <div id="education"><?php require_once('input.php'); ?></div>
                        <button type="button" name="addapp" class="btn btn-info" onclick="addMore();" style="margin-left: 15px;"><i class="fa fa-plus"></i> Add More</button>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="add" class="btn btn-outline-primary">Save changes</button>
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
          				<div class="card-body">
          					  <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Degree</th>
                                    <th>School/College</th>
                                    <th>Grade</th>
                                    <th>Year of Passing</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                  $i=1;
                                  $educt=mysqli_query($con, "select * from edu_master where um_id=".$userid);
                                  while($edu=mysqli_fetch_array($educt))
                                 {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $edu['em_title']; ?></td>
                                    <td><?php echo $edu['em_uni']; ?></td>
                                    <td><?php echo $edu['em_score']; ?></td>
                                    <td><?php echo $edu['em_payrs']; ?></td>
                                    <td><a href="viewpro_update.php?id=<?php echo $edu['em_id']; ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-pencil"></i></a>&nbsp;<a href="viewpro_del.php?id=<?php echo $edu['em_id']; ?>" class="btn btn-outline-danger btn-sm"><i class="fa fa-remove"></i></a></td>
                                </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
          				</div>
          			</div>
          		</div>
          	</div>
          </section>
      		</div>
  		</div>
	</div>
</form>

  <?php include 'footer.php'; ?>
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>