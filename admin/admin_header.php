<!--
author: Boostraptheme
author URL: https://boostraptheme.com
License: Creative Commons Attribution 4.0 Unported
License URL: https://creativecommons.org/licenses/by/4.0/
-->
<?php 
include '../config/configuration.php';
?>

<!DOCTYPE html>
<html>

<head>
    <base href="http://localhost/berkahsantoso/admin/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">

    <title>Berkah Santoso - Jasa Strauss Pile dan Bored Pile</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <!-- global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-icon-style.css">
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="css/ui-elements/card.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body> 

<!--====================================================
                         MAIN NAVBAR
======================================================-->        
    <header class="header">
        <nav class="navbar navbar-expand-lg ">
            <div class="search-box">
                <button class="dismiss"><i class="icon-close"></i></button>
                <form id="searchForm" action="#" role="search">
                    <input type="search" placeholder="Search Now" class="form-control">
                </form>
            </div>
            <div class="container-fluid ">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <div class="brand-text brand-big hidden-lg-down"><img src="../img/bs-w-admin.png" alt="Logo" class="img-fluid"></div>
                            <div class="brand-text brand-small"><img src="img/logo-icon.png" alt="Logo" class="img-fluid"></div>
                        </a>
                        <a id="toggle-btn" href="#" class="menu-btn active">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <!-- Expand-->
                    <li class="nav-item d-flex align-items-center full_scr_exp"><a class="nav-link" href="#"><img src="img/expand.png" onclick="toggleFullScreen(document.body)" class="img-fluid" alt=""></a></li>
                    <!-- Search-->
                    <li class="nav-item d-flex align-items-center"><a id="search" class="nav-link" href="#"><i class="icon-search"></i></a></li>
                    <!-- Notifications-->
                    <li class="nav-item dropdown"> 
                        <a id="notifications" class="nav-link" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o"></i><span class="noti-numb-bg"></span><span class="badge">12</span></a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope bg-red"></i>You have 6 new messages </div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-upload bg-blue"></i>Server Rebooted</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item nav-link">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-twitter bg-skyblue"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>10 minutes ago</small></div>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                        </ul>
                    </li>
                    <!-- Messages                        -->
                    <li class="nav-item dropdown"> <a id="messages" class="nav-link logout" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o"></i><span class="noti-numb-bg"></span><span class="badge">10</span></a>
                        <ul aria-labelledby="messages" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Jason Doe</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Frank Williams</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5 msg-nav-h3">Ashley Wood</h3><span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                        </ul>
                    </li> 
                    <li class="nav-item dropdown"><a id="profile" class="nav-link logout" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/avatar-default.png" alt="..." class="img-fluid rounded-circle" style="height: 30px; width: 30px;"></a>
                        <ul aria-labelledby="profile" class="dropdown-menu profile">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-default.png" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5"><?php echo $user; ?></h3><span><?php echo $status; ?></span>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.html" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-user "></i>My Profile</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.html" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-envelope-o"></i>Inbox</div> 
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="profile.html" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-cog"></i>Setting</div>
                                    </div>
                                </a>
                                <hr>
                            </li>
                            <li>
                                <a rel="nofollow" href="../app/logout.php" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content"><i class="fa fa-power-off"></i>Logout</div>
                                    </div>
                                </a> 
                            </li>
                        </ul>
                    </li>
                </ul> 
            </div>
        </nav>
    </header>

