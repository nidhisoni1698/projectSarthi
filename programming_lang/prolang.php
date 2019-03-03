<?php include 'header.php'; ?>
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-10 col-12 mb-2">
            <h3 class="content-header-title mb-0">Languages Known</h3>
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
            <form class="form-horizontal" action="prolang_add.php" method="post" novalidate>
            <div class="modal-body">
              <div class="form-group">
                <div class="controls">
                 
<!-- Programmatic control start -->
<section class="programmatic-control">
  <div class="row">
    <div class="col-12 mt-3 mb-1">
      <h4 class="text-uppercase">Programmatic control</h4>
    </div>
  </div>
  <div class="row match-height">
  <div class="col-xl-6 col-lg-12">
      <div class="card">
        <div class="card-header">
            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
              <ul class="list-inline mb-0">
              <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
              <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
              <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
              <li><a data-action="close"><i class="ft-x"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="card-content collapse show">
          <div class="card-body">
            <div class="form-group">
            </div>
        
            <div class="form-group mt-1">
              <div class="text-bold-600 font-medium-2">
                Programmatic Multiple
              </div>
              <select class="select2 js-example-programmatic-multi form-control" id="programmatic-multiple" multiple="multiple">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                  <option value="AK">Alaska</option>
                  <option value="HI">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                  <option value="CA">California</option>
                  <option value="NV">Nevada</option>
                  <option value="OR">Oregon</option>
                  <option value="WA">Washington</option>
                </optgroup>
                <optgroup label="Mountain Time Zone">
                  <option value="AZ">Arizona</option>
                  <option value="CO">Colorado</option>
                  <option value="ID">Idaho</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NM">New Mexico</option>
                  <option value="ND">North Dakota</option>
                  <option value="UT">Utah</option>
                  <option value="WY">Wyoming</option>
                </optgroup>
                <optgroup label="Central Time Zone">
                  <option value="AL">Alabama</option>
                  <option value="AR">Arkansas</option>
                  <option value="IL">Illinois</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="OK">Oklahoma</option>
                  <option value="SD">South Dakota</option>
                  <option value="TX">Texas</option>
                  <option value="TN">Tennessee</option>
                  <option value="WI">Wisconsin</option>
                </optgroup>
                <optgroup label="Eastern Time Zone">
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="IN">Indiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="OH">Ohio</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WV">West Virginia</option>
                </optgroup>
              </select>
            </div>
            <div class="btn-group btn-group-sm" role="group" aria-label="Programmatic setting and clearing Select2 options">
              <button type="button" class="js-programmatic-multi-set-val btn btn-outline-primary">
                Set to California and Alabama
              </button>
              <button type="button" class="js-programmatic-multi-clear btn btn-outline-primary">
                Clear
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Programmatic control end -->
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
                            <th>#</th>
          									<th>Languages</th>
          									<th>Action</th>
          								</tr>
          							</thead>
          							<tbody>
                        <?php
                          $i=1;
                          $plang=mysqli_query($con, "select * from pro_lang order by pl_id desc");
                          while($lang=mysqli_fetch_array($plang))
                          {
                        ?>
          								<tr>
          									<td><?php echo $i; ?></td>
          									<td><?php echo $lang['pl_name']; ?></td>
          									<td><a href="prolang_update.php?id=<?php echo $lang['pl_id']; ?>" class="btn btn-outline-success mr-1"><i class="fa fa-pencil"></i></a>&nbsp;
          									<a href="prolang_del.php?id=<?php echo $lang['pl_id']; ?>" class="btn btn-outline-danger mr-1"><i class="fa fa-remove"></i></a></td>
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