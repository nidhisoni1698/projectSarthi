<?php include 'header.php'; ?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-10 col-12 mb-2">
            <h3 class="content-header-title mb-0">My Profile</h3>
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
            <form class="form-horizontal" action="" method="post" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required data-validation-required-message="First Name is required">
                </div>
              </div>
              <div class="form-group">
                <div class="controls">
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required data-validation-required-message="Last Name is required">
                </div>
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
          									<th>Name</th>
          									<th>Position</th>
          									<th>Office</th>
          									<th>Age</th>
          									<th>Start date</th>
          									<th>Salary</th>
          								</tr>
          							</thead>
          							<tbody>
          								<tr>
          									<td>Tiger Nixon</td>
          									<td>System Architect</td>
          									<td>Edinburgh</td>
          									<td>61</td>
          									<td>2011/04/25</td>
          									<td>$320,800</td>
          								</tr>
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