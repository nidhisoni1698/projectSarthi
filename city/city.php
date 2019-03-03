<?php include 'header.php'; ?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-10 col-12 mb-2">
            <h3 class="content-header-title mb-0">City List</h3>
            <div class="row breadcrumbs-top">
              <div class="breadcrumb-wrapper col-12">
              </div>
            </div>
          </div>
          <div class="content-header-right col-md-2 col-12">
          <button type="button" class="btn btn-outline-info block" data-toggle="modal" data-target="#defaultSize">Add New</button>
          </div>
        </div>
        <div class="modal fade text-left" id="defaultSize" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
          <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel18"> Add New Details</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form class="form-horizontal" action="city_add.php" method="post" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <div class="controls">
                  <select class="form-control" id="basicSelect" name="stat" required data-validation-required-message="Enter state Name">
                    <option selected disabled>Select Option</option>
                  <?php
                    $state=mysqli_query($con, "select * from state_master order by st_id desc");
                    while($stat=mysqli_fetch_array($state))
                    {
                  ?>
                    <option value="<?php echo $stat['st_id']; ?>"><?php echo $stat['st_name']; ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="city" class="form-control" placeholder="City Name" required data-validation-required-message="Enter City Name">
                  </div>
                  </div>
                  <div> 
                  <input type="number" name="pin" class="form-control" placeholder="PIN Number" required data-validation-required-message="Enter PIN Number">
                </div>             
            </div>
            <div class="modal-footer">
              <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
              <button type="submit" name="add" class="btn btn-outline-primary">Save changes</button>
            </div>
            </form>
          </div>
          </div>
        </div>
        <div class="content-body">
          <section id="html5">
          	<div class="row">
          		<div class="col-12">
          			<div class="card">
          				<div class="card-content collapse show">
          					<div class="card-body card-dashboard">
          						<table class="table table-striped table-bordered dataex-html5-export">
          							<thead>
          								<tr>
                            <th>#</th>
          									<th>city</th>
                            <th>pin</th>
                            <th>state</th>
          									<th>Action</th>
          								</tr>
          							</thead>
          							<tbody>
                        <?php
                          $i=1;
                          $city=mysqli_query($con, "select * from state_master s, city_master c where s.st_id=c.st_id order by c.ct_id desc");
                          while($cit=mysqli_fetch_array($city))
                          {
                        ?>
          								<tr>
          									<td><?php echo $i; ?></td>
          									<td><?php echo $cit['ct_name']; ?></td>
                            <td><?php echo $cit['ct_pin']; ?></td>
                            <td><?php echo $cit['st_name']; ?></td>
          									<td><a href="city_update.php?id=<?php echo $cit['ct_id']; ?>" class="btn btn-outline-success mr-1"><i class="fa fa-pencil"></i></a>&nbsp;<a href="city_del.php?id=<?php echo $cit['ct_id']; ?>" class="btn btn-outline-danger mr-1"><i class="fa fa-remove"></i></a></td>
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
<?php include 'footer.php'; ?>
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap4.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/jszip.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/pdfmake.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/vfs_fonts.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.print.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/tables/buttons.colVis.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app-menu.min.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/customizer.min.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/tables/datatables-extensions/datatable-button/datatable-html5.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <script src="app-assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>