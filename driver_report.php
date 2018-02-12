<?php
require_once('connect.php');
session_start();
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SIIT Management System</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"> <!-- Tell the browser to be responsive to screen width -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">   <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">  <!-- Ionicons -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">   <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.css"> <!--Choose Skin-->
                  <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
                  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">    <!-- Main Header -->
    <a href="." class="logo">   <!-- Logo -->
      <span class="logo-mini"><b>SIIT</b></span>   <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-lg"><b>Management System<b></span>  <!-- logo for regular state and mobile devices -->
    </a>




    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">

<!-- ==============================This is for Tab button================================================== -->
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>


<!-- ==============================For The Notification Menu============================================================= -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['tier'])){
          ?>
          <!-- User Account Menu -->
          <!-- ==============================Make the notification Menu ============================================================ -->
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">


          <ul class="dropdown-menu">
            <li class="header">You 1 Work to do</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> The broken quip @SIIT
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <?php
            if($_SESSION['tier'] == 'Admin'){
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
              <img src=<?php echo $_SESSION['u_pic']; ?> class="user-image" alt="User Image">  <!-- The user image in the navbar-->
              <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">  <!-- The user image in the menu -->
                <img src=<?php echo $_SESSION['u_pic']; ?> class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['fname']; ?> - Admin

                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=1">Request</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="member.php?mode=2">Confirm</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <form action="profile.php?mode=2" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                    <input type="hidden" name="mode" value=2>
                      <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                      <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                      <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                      <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                      <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                      <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                      <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
                  </form>
                </div>

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php
            }else if($_SESSION['tier'] == 'Admin_van'){
              ?>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
                  <img src=<?php echo $_SESSION['u_pic']; ?> class="user-image" alt="User Image">  <!-- The user image in the navbar-->
                  <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">  <!-- The user image in the menu -->
                    <img src=<?php echo $_SESSION['u_pic']; ?> class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['fname']; ?> - Admin
                    </p>
                  </li>

                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-4 text-center">
                        <a href="member.php?mode=0">History</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="member.php?mode=1">Request</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="member.php?mode=2">Confirm</a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <form action="profile.php?mode=2" method="post">
                        <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                        <input type="hidden" name="mode" value=2>
                          <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                          <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                          <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                          <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                          <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                          <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                          <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
                      </form>
                    </div>

                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <?php
            }else if($_SESSION['tier'] == 'Admin_tech'){
              ?>
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
                  <img src=<?php echo $_SESSION['u_pic']; ?> class="user-image" alt="User Image">  <!-- The user image in the navbar-->
                  <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">  <!-- The user image in the menu -->
                    <img src=<?php echo $_SESSION['u_pic']; ?> class="img-circle" alt="User Image">
                    <p>
                      <?php echo $_SESSION['fname']; ?> - Admin
                    </p>
                  </li>

                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-6 text-center">
                        <a href="member.php?mode=0">History</a>
                      </div>
                      <div class="col-xs-6 text-center">
                        <a href="member.php?mode=1">Request</a>
                      </div>
                    </div>
                    <!-- /.row -->
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <form action="profile.php?mode=2" method="post">
                        <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                        <input type="hidden" name="mode" value=2>
                          <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                          <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                          <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                          <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                          <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                          <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                          <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
                      </form>
                    </div>

                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <?php
            }else{
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">   <!-- Menu Toggle Button -->
              <img src=<?php echo $_SESSION['u_pic']; ?> class="user-image" alt="User Image">  <!-- The user image in the navbar-->
              <span class="hidden-xs"><?php echo $_SESSION['fname']; ?></span> <!-- hidden-xs hides the username on small devices so only the image appears. -->
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">  <!-- The user image in the menu -->
                <img src=<?php echo $_SESSION['u_pic']; ?> class="img-circle" alt="User Image">
                <p>
                  <?php echo $_SESSION['fname']; ?> - <?php echo $_SESSION['tier']; ?>
                </p>
              </li>

              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="member.php?mode=0">History</a>
                  </div>

                  <div class="col-xs-6 text-center">
                    <a href="member.php?mode=1">Request</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <form action="profile.php?mode=2" method="post">
                    <input type="submit" class="btn btn-default btn-flat" value="Profile" />
                    <input type="hidden" name="mode" value=2>
                      <input type="hidden" name="full_name" value="<?php echo $_SESSION['fname']; ?>" >
                      <input type="hidden" name="user_num" value="<?php echo $_SESSION['user_no']; ?>" >
                      <input type="hidden" name="username" value="<?php echo $_SESSION['user_name']; ?>" >
                      <input type="hidden" name="password" value="<?php echo $_SESSION['user_pass']; ?>" >
                      <input type="hidden" name="email" value="<?php echo $_SESSION['e_mail']; ?>" >
                      <input type="hidden" name="user_tier" value="<?php echo $_SESSION['tier']; ?>" >
                      <input type="hidden" name="user_telephone" value="<?php echo $_SESSION['tele_number']; ?>" >
                  </form>
                </div>

                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          <?php
            }
          ?>
          <?php
            }
            else{
          ?>
          <li><a href="login.php">Log-in</a></li>
          <?php
            }
          ?>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel" style="margin-top:20px">
        <?php
          if(!isset($_SESSION['tier'])){
        ?>
        <center>
          <p><font color="white" size="5">Welcome Guest</font></p>
        </center>
        <?php
          }
          else{
        ?>
        <div class="pull-left image">
          <img src=<?php echo $_SESSION['u_pic']; ?> class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['fname']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>

        <?php
          }
        ?>
      </div>

      <!-- search form (Optional) -->
      <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
    -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">


        <!-- ///////////////////////////////////      ADMIN MENU                /////////////////////////////////////////////////////// -->

                <?php
                if(isset($_SESSION['tier'])){
                  if($_SESSION['tier'] == 'Admin'){
                ?>
                <li class="header"
                    style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
                >
                <center>Admin Menu</center></li>
                <!-- Optionally, you can add icons to the links -->
                <li class="treeview">
                  <a href="#"><i class="fa fa-link"></i><span>Van Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="admin.php?mode=0">Add/Delete Van Data</a></li>
                    <li><a href="admin.php?mode=2">Add Week Schedule</a></li>
                    <li><a href="analysis_van.php">Van Analysis</a></li>
                    <li><a href="weeklySum.php">สรุปงาน</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <a href="#"><i class="fa fa-link"></i><span>Stock Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="manage_stock.php?mode=0">Add Stock</a></li>
                    <li><a href="manage_stock.php?mode=1">View Stock</a></li>
                    <li><a href="manage_stock.php?mode=2">รายงานสต็อค</a></li>
                  </ul>
                </li>


                <li class="treeview">
                  <a href=""><i class="fa fa-link"></i><span>User Management</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>

                  <ul class="treeview-menu">
                    <li><a href="admin.php?mode=1">Change Users Information</a></li>
                  </ul>
                </li>

                <li class="treeview">
                  <li>
                    <a href="member.php?mode=5">
                      <i class="fa fa-circle-o text-aqua">
                      </i>
                      <span>Check Driver Report</span>
                    </a>
                  </li>
                </li>

                <?php
                }else if($_SESSION['tier'] == 'Admin_van'){
                  ?>
                    <li class="header"
                        style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
                    >
                    <center>Admin Menu</center></li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="treeview">
                      <a href="#"><i class="fa fa-link"></i><span>Van Management</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                      </a>

                      <ul class="treeview-menu">
                        <li><a href="admin.php?mode=0">Add/Delete Van Data</a></li>
                        <li><a href="admin.php?mode=2">Add Week Schedule</a></li>
                        <li><a href="analysis_van.php">Van Analysis</a></li>
                        <li><a href="weeklySum.php">สรุปงาน</a></li>
                      </ul>
                    </li>

                    <li class="treeview">
                      <li>
                        <a href="driver_report.php">
                          <i class="fa fa-circle-o text-aqua">
                          </i>
                          <span>กรอกข้อมูลงานของรถตู้</span>
                        </a>
                      </li>
                    </li>

                  <?php
                    }else if($_SESSION['tier'] == 'Admin_tech'){
                          ?>
                            <li class="header"
                                style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
                            >
                            <center>Admin Menu</center></li>
                            <!-- Optionally, you can add icons to the links -->
                            <li class="treeview">
                              <a href="#"><i class="fa fa-link"></i><span>Stock Management</span>
                                <span class="pull-right-container">
                                  <i class="fa fa-angle-left pull-right"></i>
                                </span>
                              </a>
                              <ul class="treeview-menu">
                                <li><a href="manage_stock.php?mode=0">Add Stock</a></li>
                                <li><a href="manage_stock.php?mode=1">View Stock</a></li>
                                <li><a href="manage_stock.php?mode=2">รายงานสต็อค</a></li>
                              </ul>
                            </li>

                          <?php
                            }else if($_SESSION['tier'] == 'Driver'){
                    ?>
                      <li class="header" style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px">
                      <center>Driver Menu</center></li>
                      <li class="treeview">
                        <li>
                          <a href="member.php?mode=3">
                            <i class="fa fa-circle-o text-aqua">
                            </i>
                            <span>Today Work</span>
                          </a>
                        </li>
                      </li>
                    <?php
                    }else if($_SESSION['tier'] == 'Driver'){
                ?>
                  <li class="header" style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px">
                  <center>Driver Menu</center></li>
                  <li class="treeview">
                    <li>
                      <a href="member.php?mode=3">
                        <i class="fa fa-circle-o text-aqua">
                        </i>
                        <span>Today Work</span>
                      </a>
                    </li>
                  </li>
                <?php
                  }else if(isset($_SESSION['tier'])){
                    if($_SESSION['tier'] == 'Technician'){
                    ?>
                      <li class="header" style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px">
                        <center>Technician Menu</center></li>
                        <li class="treeview">
                          <a href="#"><i class="fa fa-link"></i><span>Stock Management</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                          </a>
                          <ul class="treeview-menu">
                            <li><a href="manage_stock.php?mode=0">Add Stock</a></li>
                            <li><a href="manage_stock.php?mode=1">View Stock</a></li>
                            <li><a href="manage_stock.php?mode=2">รายงานสต็อค</a></li>
                          </ul>
                        </li>
                  <?php
                    }
              ?>
              <li class="header" style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px">
              <center>Member Menu</center></li>
              <li class="treeview">
                <li>
                  <a href="member.php?mode=5">
                    <i class="fa fa-circle-o text-aqua">
                    </i>
                    <span>Check Driver Report</span>
                  </a>
                </li>
              </li>
              <li class="treeview">
                <li>
                  <a href="weeklySum.php">
                    <i class="fa fa-circle-o text-aqua">
                    </i>
                    <span>สรุปงาน</span>
                  </a>
                </li>
              </li>
              <?php
                  }
                }
                ?>
        <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


        <li class="header"
            style="margin-top:20px;padding-top:20px;padding-bottom:20px;font-size:20px"
        >
        <center>System Menu</center></li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active treeview">
          <a href="#"><i class="fa fa-link"></i><span>Broken Equipment Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="brokenEquip.php?mode=0">Current Job</a></li>
            <li><a href="brokenEquip.php?mode=1">History</a></li>
            <li><a href="broken_index.php">Report Broken Equipment</a></li>
          </ul>
        </li>


        <li class="treeview">
          <a href=""><i class="fa fa-link"></i><span>Van Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

          <ul class="treeview-menu">
            <li><a href="vanindex.php?mode=0">Schedule Of The Van</a></li>
            <li><a href="vanindex.php?mode=1">Van Status</a></li>
            <li><a href="vanindex.php?mode=2">Van Data/Information</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

<!-- ========================================== Header ========================================================= -->
    <!-- Main content -->
    <section class="content">
      <div class="box box-info" style="padding-top:1%;">
        <div class="box-header" style="padding-left:2%;padding-right:2%;">
          <h3 class="box-title" style="margin-top:10px"><b>Driver Report</b></h3>
          <hr>
        </div>

        <?php
          $q = "SELECT * FROM request, member WHERE request_date = '".date("Y-m-d")."' AND
                                            request.request_status = 0 AND
                                            request_approve = 'Accepted' AND
                                            request.request_by = member.member_id
                                            ORDER BY request_from;";
          $res = $db -> query($q);
          if ($res && $res->num_rows >= 1){
            while($row = $res -> fetch_array()){
          ?>
          <form name="input_work" id="work_input" action="member.php?mode=4" method="post">
              <input type="hidden" name="request" value="<?php echo $row['request_to_place']; ?>">
              <input type="hidden" name="from_time" value="<?php echo $row['request_from']; ?>">
              <input type="hidden" name="to_time" value="<?php echo $row['request_to']; ?>">
              <input type="hidden" name="description" value="<?php echo $row['request_description']; ?>">
              <input type="hidden" name="f_name" value="<?php echo $row['full_name']; ?>">
              <input type="hidden" name="member_tele" value="<?php echo $row['member_tele']; ?>">
              <input type="hidden" name="date" value="<?php echo $row['request_date']; ?>">
              <input type="hidden" name="r_no" value="<?php echo $row['request_no']; ?>">
              <input type="hidden" name="r_status" value="<?php echo $row['request_status']; ?>">
            <a href="#">
              <div class="button1" onClick="document.forms['input_work'].submit();">
                <div class="row" style="margin-left:0px;margin-right:0px">
                  <div class="col-md-2" style="padding-left:4%;padding-top:1.5%;padding-bottom:2%;">
                      <input type="text" class="knob" value="100" data-width="90" data-height="90" data-fgColor="#932ab6">
                  </div>
                  <div style="padding-left:4%;padding-top:0%;padding-bottom:2%;">
                      <div class="col-xs-3">งานของรถหมายเลข : </div>
                        <div><?php echo $row['request_assign']; ?> </div>
                      <div class="col-xs-3">สถานที่ปลายทาง : </div>
                        <div><?php echo $row['request_to_place']; ?> </div>
                      <div class="col-xs-3">ตั้งแต่ : </div>
                        <div><?php echo substr($row['request_from'],0,5); ?></div>
                      <div class="col-xs-3">จนถึง : </div>
                        <div><?php echo substr($row['request_to'],0,5); ?></div>
                      <div class="col-xs-3">รายละเอียด : </div>
                        <div><?php echo $row['request_description']; ?> </div>
                      <div class="col-xs-3">ขอโดย : </div>
                        <div><?php echo $row['full_name']; ?></div>
                      <div class="col-xs-3">เบอร์โทรศัพท์ : </div>
                        <div><?php echo $row['member_tele']; ?></div>
                  </div>
                </div>
              </div>
            </a>
          </form>
          <hr>
          <?php
            }
          }else{
          ?>
          <div style="padding-top:15%;padding-bottom:20%">
            <h1 style="text-align: center;">
              You don't have any work today.
            </h1>
          </div>
        <?php
          }
        ?>
      </div>
    </section>
<!-- =========================================================================================================== -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      This point is this class
    </div>
    <!-- Default to the left -->
    <strong>Sirindhorn International Institute of Technology (SIIT)</strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- jQuery Knob -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
     <script>
       $(function () {
         //Datemask dd/mm/yyyy
         $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
         //Colorpicker
         $(".my-colorpicker1").colorpicker();
         //color picker with addon
         $(".my-colorpicker2").colorpicker();
         //Timepicker
         $(".timepicker").timepicker({
           minuteStep: 60,
           defaultTime: '06:00',
           use24hours: true,
           showMeridian: false,
           showInputs: false
         });

         $("#example1").DataTable();
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": false,
           "ordering": false,
           "info": true,
           "autoWidth": false
         });
       });

       $(".knob").knob({

      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
       //Date picker
    $('#datepicker').datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true
    });
     </script>


</body>
</html>
