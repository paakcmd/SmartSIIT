<!DOCTYPE html>
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
      <center>
        <h1>
          Please Select Current Jobs or History to view the information.
        </h1>
      </center>
    </section>

<!-- ========================================== Header ========================================================= -->
    <!-- Main content -->
    <section class="content">
      <?php
      if(isset($_GET['mode'])){
        if($_GET['mode'] == 0){
      ?>
      <div class="box" style="padding-left:10px;padding-right:10px;padding-bottom:30px">
        <div class="box-header">
          <h3 class="box-title" style="margin-top:10px"><b>Broken Equipment Detail</b></h3>
          <hr>
        </div>
        <table id="example2" class="table table-bordered table-hover" style="width:100%;" align="center">
          <thead>
            <tr>
              <td style="text-align:center;width:10%">หมายเลข</td>
              <td style="text-align:center">ชื่อสิ่งของ</td>
              <td style="text-align:center">สถานที่</td>
              <td style="text-align:center">รายละเอียด</td>
              <td style="text-align:center">สถานะ</td>
              <td style="text-align:center">ช่าง</td>
              <td style="text-align:center">ข้อมูล</td>
              <td style="text-align:center">เบิก</td>
            </tr>
          </thead>
          <?php
            $q = "SELECT * FROM broken_equipment, member WHERE equipment_status <> 'Finish'
                                                           AND equipment_assign = member_id;";
            $res = $db -> query($q);
            while($row = $res -> fetch_array()){
          ?>
          <tbody>
            <tr>
              <td style="text-align:center"><?php echo $row['equipment_ID']; ?></td>
              <td height="50px" width="200px" style="text-align:center;"><?php echo $row['equipment_name']; ?></td>
              <td width="20%" style="text-align:center"><?php echo $row['equipment_campus']; ?></td>
              <td width="30%" style="text-align:center"><?php echo $row['equipment_decription']; ?></td>
              <td width="20%" style="text-align:center"><?php echo $row['equipment_status']; ?></td>
              <td width="20%" style="text-align:center"><?php echo $row['full_name']; ?></td>
              <td style="text-align:center;width:18%;">
                <form id="prof_form" action="brokenEquip_check.php" method="post">
                    <input type="hidden" name="equipment_no" value=<?php echo $row['equipment_ID']; ?> >
                    <input type="hidden" name="equipment_name" value=<?php echo $row['equipment_name']; ?> >
                    <input type="hidden" name="equipment_campus" value=<?php echo $row['equipment_campus']; ?> >
                    <input type="hidden" name="equipment_decription" value="<?php echo $row['equipment_decription']; ?>" >
                    <input type="hidden" name="equipment_status" value=<?php echo $row['equipment_status']; ?> >
                    <input type="hidden" name="equipment_building" value=<?php echo $row['equipment_building']; ?> >
                    <input type="hidden" name="equipment_room" value=<?php echo $row['equipment_room']; ?> >
                    <input type="hidden" name="equipment_email" value=<?php echo $row['equipment_email']; ?> >
                    <input type="hidden" name="equipment_photo" value=<?php echo $row['equipment_photo']; ?> >
                    <input type="hidden" name="full_name" value="<?php echo $row['full_name']; ?>" >
                    <input type="submit" class="btn btn-block btn-primary" value="Link">
                </form>
              </td>
              <td style="text-align:center;width:18%;">
                <form id="prof_form" action="withdraw.php" method="post">
                    <input type="hidden" name="equipment_no" value=<?php echo $row['equipment_ID']; ?> >
                    <input type="hidden" name="equipment_name" value=<?php echo $row['equipment_name']; ?> >
                    <input type="hidden" name="equipment_campus" value=<?php echo $row['equipment_campus']; ?> >
                    <input type="hidden" name="equipment_decription" value="<?php echo $row['equipment_decription']; ?>" >
                    <input type="hidden" name="equipment_status" value=<?php echo $row['equipment_status']; ?> >
                    <input type="hidden" name="equipment_building" value=<?php echo $row['equipment_building']; ?> >
                    <input type="hidden" name="equipment_room" value=<?php echo $row['equipment_room']; ?> >
                    <input type="hidden" name="equipment_email" value=<?php echo $row['equipment_email']; ?> >
                    <input type="submit" class="btn btn-block btn-success" value="Link">
                </form>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
          </table>
        </div>
      <?php
        }
        else if($_GET['mode'] == 1){
      ?>
      <div class="box" style="padding-left:10px;padding-right:10px;padding-bottom:30px">
        <div class="box-header">
          <h3 class="box-title" style="margin-top:10px"><b>Broken Equipment Detail</b></h3>
          <hr>
        </div>
        <table id="example2" class="table table-bordered table-hover" style="width:100%;" align="center">
          <thead>
            <tr>
              <td style="text-align:center;width:10%">หมายเลข</td>
              <td style="text-align:center">ชื่อสิ่งของ</td>
              <td style="text-align:center">สถานที่</td>
              <td style="text-align:center">รายละเอียด</td>
              <td style="text-align:center">สถานะ</td>
              <td style="text-align:center">ข้อมูล</td>
            </tr>
          </thead>
          <?php
            $q = "SELECT * FROM broken_equipment, member WHERE equipment_status = 'Finish'
                                                        AND equipment_assign = member_id;";
            $res = $db -> query($q);
            while($row = $res -> fetch_array()){
          ?>
          <tbody>
            <tr>
              <td style="text-align:center"><?php echo $row['equipment_ID']; ?></td>
              <td height="50px" width="200px" style="text-align:center;"><?php echo $row['equipment_name']; ?></td>
              <td width="20%" style="text-align:center"><?php echo $row['equipment_campus']; ?></td>
              <td width="30%" style="text-align:center"><?php echo $row['equipment_decription']; ?></td>
              <td width="20%" style="text-align:center"><?php echo $row['equipment_status']; ?></td>
              <td style="text-align:center;width:18%;">
                <form id="prof_form" action="brokenEquip_check.php" method="post">
                    <input type="hidden" name="equipment_no" value=<?php echo $row['equipment_ID']; ?> >
                    <input type="hidden" name="equipment_name" value=<?php echo $row['equipment_name']; ?> >
                    <input type="hidden" name="equipment_campus" value=<?php echo $row['equipment_campus']; ?> >
                    <input type="hidden" name="equipment_decription" value="<?php echo $row['equipment_decription']; ?>" >
                    <input type="hidden" name="equipment_status" value=<?php echo $row['equipment_status']; ?> >
                    <input type="hidden" name="equipment_building" value=<?php echo $row['equipment_building']; ?> >
                    <input type="hidden" name="equipment_room" value=<?php echo $row['equipment_room']; ?> >
                    <input type="hidden" name="equipment_email" value=<?php echo $row['equipment_email']; ?> >
                    <input type="hidden" name="equipment_photo" value=<?php echo $row['equipment_photo']; ?> >
                    <input type="hidden" name="full_name" value=<?php echo $row['full_name']; ?> >
                    <input type="submit" class="btn btn-block btn-primary" value="Link">
                </form>
              </td>
            </tr>
            <?php
            }
            ?>
          </tbody>
          </table>
        </div>

      <?php
        }
      }
      ?>

      </section>
      <?php

      ?>
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

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
     <script>
       $(function () {

         $("#example1").DataTable();
         $('#example2').DataTable({
           "paging": true,
           "lengthChange": false,
           "searching": false,
           "ordering": true,
           "info": false,
           "autoWidth": false
         });
       });
     </script>


</body>
</html>
