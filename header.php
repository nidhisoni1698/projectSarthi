<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {header("location:index.php");}
  else
  {
    include 'db.php';
    $userid=$_SESSION['userid'];
    $userdata=mysqli_query($con, "select * from user_master where um_id=".$userid);
    $userlog=mysqli_fetch_array($userdata);
  }
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Project Sarthi | Admin Panel</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/ps.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/timeline.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/switch.min.css">
   </head>
  <body class="vertical-layout vertical-menu-modern 2-columns  menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-shadow navbar-dark navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item mr-auto"><a class="navbar-brand" href="index-2.html">
                <h2 class="brand-text" style="font-family: trebuchet">Project Sarthi</h2></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                  <div class="search-input">
                    <input class="input" type="text" placeholder="Explore...">
                  </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-default badge-danger badge-default badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-default badge-danger float-right m-0">5 New</span></h6>
                  </li>
                  <li class="scrollable-container media-list"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                    
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li>
              
              
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online">
              <?php if($userlog['um_img']!="") { ?>
              <img src="<?php echo $userlog['um_img']; ?>" alt="avatar">
              <?php } else { ?>
              <img src="app-assets/images/portrait/small/avatar-s-1.png" alt="avatar">
              <?php } ?>
              <i></i></span><span class="user-name"><?php echo $userlog['um_name']." ".$userlog['um_sname']; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="user-profile.php"><i class="ft-user"></i> My account</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
          <!--<li class=" navigation-header"><span>General</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>-->
          </li>
          <li class="nav-item"><a href="dashboard.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a></li>
          <li class="nav-item"><a href="user.php"><i class="ft-users"></i><span class="menu-title" data-i18n="">Users</span></a></li>
          <li class=" nav-item"><a href="cont.php"><i class="ft-globe"></i><span class="menu-title" data-i18n="">Country</span></a></li>
          <li class=" nav-item"><a href="state.php"><i class="ft-map"></i><span class="menu-title" data-i18n="">State</span></a></li>
          <li class=" nav-item"><a href="city.php"><i class="ft-map"></i><span class="menu-title" data-i18n="">City</span></a></li>
          <li class=" nav-item"><a href="prolang.php"><i class="ft-book"></i><span class="menu-title" data-i18n="">Programming Languages</span></a></li>
          <li class=" nav-item"><a href="project-summary.html"><i class="ft-airplay"></i><span class="menu-title" data-i18n="">Projects</span></a></li>
          <li class=" nav-item"><a href="invoice-template.html"><i class="ft-printer"></i><span class="menu-title" data-i18n="">Resume</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-share"></i><span class="menu-title" data-i18n="">Timelines</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-bookmark"></i><span class="menu-title" data-i18n="">Bookmarks</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-zap"></i><span class="menu-title" data-i18n="">Ratings</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Feedback</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-plus-square"></i><span class="menu-title" data-i18n="">Help</span></a></li>
          <li class=" nav-item"><a href="#"><i class="ft-droplet"></i><span class="menu-title" data-i18n="">Color Palette</span><span class="badge badge badge-warning badge-pill float-right mr-2">14</span></a></li>
        </ul>
      </div>
    </div>