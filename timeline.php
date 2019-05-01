<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farm - Messages</title>
    <!-- Core CSS - Include with every page -->
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
     <!-- Page Level CSS -->
    <link href="assets/plugins/timeline/timeline.css" rel="stylesheet" />

</head>


<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo2.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger"></span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    <!-- dropdown-messages -->
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Expert</span></strong>
                                    <span class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                    </span>
                                </div>
                                <div>Soyabean is in great demand now-a-days, also growing soyabeans increases the Nitrogen content of the soil. Thats why every farmer in Eastern Maharashtra should try to grow soyabeans once in 3 years.</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info"><?php echo $_SESSION['USER'];?></span></strong>
                                    <span class="pull-right text-muted">
                                        <i class="fa fa-clock-o fa-fw"></i>15 mins ago
                                    </span>
                                </div>
                                <div>May I know which is the best crop to grow in Eastern Maharashtra?</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="timeline.php">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-messages -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    <!-- dropdown tasks -->
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Field Watering</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Rendering Graphs</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Silo Capacity Left</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Data Upload to Server</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="task.php">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-tasks -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    <!-- dropdown alerts-->
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                     <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em></span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="alert.php">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end dropdown-alerts -->
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="profile.php"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
								<a href="profile.php">
									<img src="assets/img/user2.png" alt="">
								</a>
							</div>
                            <div class="user-info">
                                <div><strong><?php echo $_SESSION['USER'];?></strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
					
                    <li>
                        <a href="index.php"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Graphs<span class="fa arrow"></span></a>
                        <!-- second-level-items -->
						<ul class="nav nav-second-level">
                            <li>
                                <a href="morris.php">Temperature & Humidity</a>
                            </li>
                            <li>
                                <a href="graph2.php">Soil Moisture & Silo Storage</a>
                            </li>
                        </ul>
                    </li>
					<li>
                        <a href="tables.php"><i class="fa fa-files-o fa-fw"></i>Crop Support</a>
                    </li>
                    <li>
                        <a class="selected" href="#"><i class="fa fa-flask fa-fw"></i>Notifications<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="selected" href="timeline.php">Messages</a>
                            </li>
                            <li>
                                <a href="task.php">Tasks Status</a>
                            </li>
                            <li>
                                <a href="alert.php">Alerts</a>
                            </li>
                        </ul>
                        <!-- second-level-items -->
                    </li>
					<li>
                        <a href="about.php"><i class="fa fa-files-o fa-fw"></i>About Us</a>
                    </li>
                    <li>
                        <a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                       
                        <!-- second-level-items -->
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">All Messages</h1>
                </div>
                <!--End Page Header -->
            </div>

               <div class="row">
                <div class="col-lg-12">
                    <!--Timeline -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <i class="fa fa-envelope-o fa-fw"></i>Message Timeline
                        </div>

                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-body">
										<span class="chat-img pull-left">
                                        <img src="assets\img\user1.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                            <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Expert</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>12 mins ago
                                            </small>
                                        </div>
                                        <p>
                                            Soyabean is in great demand now-a-days, also growing soyabeans increases the Nitrogen content of the soil. Thats why every farmer in Eastern Maharashtra should try to grow soyabeans once in 3 years.
                                        </p>
                                    </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <span class="chat-img pull-right">
                                        <img src="assets\img\user3.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>15 mins ago</small>
                                            <strong class="pull-right primary-font"><?php echo $_SESSION['USER'];?></strong>
                                        </div>
                                        <p>
                                            May I know which is the best crop to grow in Eastern Maharashtra?
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <span class="chat-img pull-left">
                                        <img src="assets\img\user1.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Expert</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>20 mins ago</small>
                                        </div>
                                        <p>
                                           Black soil is great for cotton. But cotton should always be sown alternatively with pulses for maintaining the nitrogen content.
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
									<div class="timeline-badge info">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <span class="chat-img pull-right">
                                        <img src="assets\img\user3.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>29 mins ago</small>
                                            <strong class="pull-right primary-font"><?php echo $_SESSION['USER'];?></strong>
                                        </div>
                                        <p>
                                            What crops can be sown on black soil?
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <span class="chat-img pull-left">
                                        <img src="assets\img\user1.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <strong class="primary-font">Expert</strong>
                                            <small class="pull-right text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>41 mins ago</small>
                                        </div>
                                        <p>
                                           The crops best yielding in Thane Block are: Rice, Urd, Brinjal, Banana, Ragi, Niger, Tomato and Mango.
                                        </p>
                                    </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="timeline-panel">
                                         <span class="chat-img pull-right">
                                        <img src="assets\img\user3.png" alt="User Avatar" class="img-circle" />
                                    </span><br><hr>
                                    <div class="chat-body clearfix">
                                        <div class="header">
                                            <small class=" text-muted">
                                                <i class="fa fa-clock-o fa-fw"></i>47 mins ago</small>
                                            <strong class="pull-right primary-font"><?php echo $_SESSION['USER'];?></strong>
                                        </div>
                                        <p>
                                            What crops will give best yield in the soil and weather conditions of Thane District: Thane Block ?
                                        </p>
                                    </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!--End Timeline -->
                </div>
            </div>


        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>
