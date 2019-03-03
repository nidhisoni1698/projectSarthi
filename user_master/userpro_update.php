<?php
  include 'header.php';
     $userid=$_SESSION['userid'];
     $userdata=mysqli_query($con, "select * from user_master where um_id=".$userid);
     $userlog=mysqli_fetch_array($userdata);
?>
  <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div id="user-profile">
    <div class="row">
        <div class="col-12">
            <div class="card profile-with-cover">
                <div class="card-img-top img-fluid bg-cover height-300" style="background: url('app-assets/images/carousel/22.jpg') 50%;"></div>
                <div class="media profil-cover-details w-100">
                    <div class="media-left pl-2 pt-2">
                        <a href="#" class="profile-image">
                            <img src="app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border height-100" alt="Card image">
                        </a>
                    </div>
                    <div class="media-body pt-3 px-2">
                        <div class="row">
                            <div class="col">
                              <h3 class="card-title">Jose Diaz</h3>
                            </div>
                            <div class="col text-right">
                                <button type="button" class="btn btn-primary"><i class="fa fa-dashcube"></i> Followers</button>
                                <div class="btn-group d-none d-md-block float-right ml-2" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-success"><i class="fa fa-dashcube"></i> Following</button>
                                </div>
                            </div>
                          </div>
                    </div>
                </div>
                <nav class="navbar navbar-light navbar-profile align-self-end">
                    <button class="navbar-toggler d-sm-none" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation"></button>
                    <nav class="navbar navbar-expand-lg">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#"><i class="fa fa-line-chart"></i> Timeline <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="ft-user"></i>Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-briefcase"></i>My Projects</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><i class="fa fa-bookmark"></i> Bookmarks</a>
                                </li>
                            </ul>
                             </div>
                          </div>
                       </nav>
                   </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="app-content content">
      <div class="content-wrapper">
          <div class="content-body">
          <section class="input-validation">
          	<div class="row">
          		<div class="col-md-12">
          			<div class="card">
          				<div class="card-content collapse show">
          					<div class="card-body">
          						<form class="form-horizontal" action="userpro_update1.php?id=<?php echo $id; ?>" method="post" novalidate>
          							<div class="row">
          								<div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>First Name <span class="required">*</span></h5>
                              <div class="controls">
                               <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $userlog['um_name']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
          									<div class="form-group">
          										<h5>Last Name<span class="required">*</span></h5>
          										<div class="controls">
          											<input type="text" name="sname" class="form-control" placeholder="Last Name" value="<?php echo $userlog['um_sname']; ?>" required data-validation-required-message="This field is required">
          										</div>
          									</div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Email-id<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="text" name="mail" class="form-control" placeholder="Email-id" value="<?php echo $userlog['um_mail']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                          </div>
                          
                         <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Password</h5>
                              <div class="controls">
                                <input type="Password" name="psw" class="form-control" placeholder="Password">
                              </div>
                            </div>
                          </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Contact Number<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="text" name="cnct" class="form-control" placeholder="Contact Number" value="<?php echo $userlog['um_cnct']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Address<span class="required">*</span></h5>
                              <div class="controls">
                                <textarea name="add" class="form-control" placeholder="Address" value="<?php echo $userlog['um_add']; ?>" required data-validation-required-message="This field is required"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Country<span class="required">*</span></h5>
                              <div class="controls">
                                <select class="form-control" name="cont" required data-validation-required-message="Select Country">
                                  <option selected disabled>Select Country</option>
                                  <?php
                                    $country=mysqli_query($con, "select * from country_master");
                                    while($cont=mysqli_fetch_array($country))
                                    {
                                  ?>
                                  <option value="<?php echo $cont['co_id']; ?>"><?php echo $cont['co_name']; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>State<span class="required">*</span></h5>
                              <div class="controls">
                                <textarea name="add" class="form-control" placeholder="Address" value="<?php echo $userlog['um_add']; ?>" required data-validation-required-message="This field is required"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Birth-date<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="date" name="bdate" class="form-control" placeholder="Birthdate" value="<?php echo $userlog['um_bdate']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                             <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Gender<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="radio" name="gen" class="radio" placeholder="" value="<?php echo $userlog['um_gen']; ?>" required data-validation-required-message="This field is required"> Male&nbsp;
                                 <input type="radio" name="gen" class="radio" placeholder="" value="<?php echo $userlog['um_gen']; ?>" required data-validation-required-message="This field is required"> Females
                              </div>
                            </div>
                          </div>       
                        </div>      
                        <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Programming Languages<span class="required">*</span></h5>
                              <div class="controls">
                                <input type="text" name="lang" class="form-control" placeholder="Languages" value="<?php echo $userlog['um_lang']; ?>" required data-validation-required-message="This field is required">
                              </div>
                            </div>
                          </div>   
                             <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Work Experience</h5>
                              <div class="controls">
                                <input type="text" name="occp" class="form-control" placeholder="Experience" value="<?php echo $userlog['um_occp']; ?>">
                              </div>
                            </div>
                          </div>       
                           <div class="col-lg-6 col-md-12">
                            <div class="form-group">
                              <h5>Linked-in Profile</h5>
                              <div class="controls">
                                <input type="text" name="linkedin" class="form-control" placeholder="Linkedin" value="<?php echo $userlog['um_linkedin']; ?>">
                              </div>
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