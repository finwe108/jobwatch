<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title><?php echo APP_NAME ? APP_NAME : 'Jobs' ?> - Admin</title>
        <meta name="description" content="Jobwatch Admin">
        <meta name="author" content="weekend trio webdevelopment | niceatma">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../images/icon32.ico">

        <!-- Bootstrap CSS -->
        <link href="../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Font Awesome CSS -->
        <link href="../styles/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Custom CSS -->
        <link href="../styles/css/style.css" rel="stylesheet" type="text/css" />

        <!-- mohan CSS -->
        <link rel="stylesheet" type="text/css" href="../styles/css/mohan.css">
        
        <!-- BEGIN CSS for this page -->
        <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css"/> -->
        <link rel="stylesheet" type="text/css" href="../styles/css/for_cdn/dataTables.bootstrap4.min.css">
        <!-- END CSS for this page -->
        
</head>

<body class="adminbody">

<div id="main">

    <!-- top bar navigation -->
    <div class="headerbar">

        <!-- LOGO -->
        <div class="headerbar-left amethyst">
            <a href="../" class="logo"><img alt="Logo" src="../images/logonotext.png" /> <span><?php echo APP_NAME."-"; ?>Admin</span></a>
        </div>

<nav class="navbar-custom amethyst">

                    <ul class="list-inline float-right mb-0">
            
            <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-question-circle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title wisteria">
                                    <h5><small>Help and Support</small></h5>
                                </div>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want custom development to integrate this theme?</b>
                                        <span>Contact Us</span>
                                    </p>
                                </a>

                                <!-- item-->
                                <a target="_blank" href="https://www.pikeadmin.com/pike-admin-pro" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Do you want PHP version of the theme that save dozens of hours of work?</b>
                                        <span>Try Pike Admin PRO</span>
                                    </p>
                                </a>                               

                                <!-- All-->
                                <a title="Clcik to visit Pike Admin Website" target="_blank" href="https://www.pikeadmin.com" class="dropdown-item notify-item notify-all amethyst">
                                    <i class="fa fa-link"></i> Visit Pike Admin Website
                                </a>

                            </div>
                        </li>
            
                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-envelope-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg">
                                <!-- item-->
                                <div class="dropdown-item noti-title wisteria">
                                    <h5><small><span class="label label-danger pull-xs-right">12</span>Contact Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Jokn Doe</b>
                                        <span>New message received</span>
                                        <small class="text-muted">2 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Michael Jackson</b>
                                        <span>New message received</span>
                                        <small class="text-muted">15 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">                                    
                                    <p class="notify-details ml-0">
                                        <b>Foxy Johnes</b>
                                        <span>New message received</span>
                                        <small class="text-muted">Yesterday, 13:30</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all amethyst">
                                    View All
                                </a>

                            </div>
                        </li>
                        
            <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fa fa-fw fa-bell-o"></i><span class="notif-bullet"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg">
                <!-- item-->
                                <div class="dropdown-item noti-title wisteria">
                                    <h5><small><span class="label label-danger pull-xs-right">5</span>Allerts</small></h5>
                                </div>
                
                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="../images/avatars/user2.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>John Doe</b>
                                        <span>User registration</span>
                                        <small class="text-muted">3 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="../images/avatars/user3.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michael Cox</b>
                                        <span>Task 2 completed</span>
                                        <small class="text-muted">12 minutes ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="#" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="../images/avatars/user4.png" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Michelle Dolores</b>
                                        <span>New job completed</span>
                                        <small class="text-muted">35 minutes ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="#" class="dropdown-item notify-item notify-all amethyst">
                                    View All Allerts
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notif">
                            <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="../images/avatars/admin.png" alt="Profile image" class="avatar-rounded">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-item noti-title wisteria">
                                    <h5 class="text-overflow"><small>Hello, admin</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="profile.php" class="dropdown-item notify-item">
                                    <i class="fa fa-user"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="../access/login.php" class="dropdown-item notify-item">
                                    <i class="fa fa-power-off"></i> <span>Logout</span>
                                </a>
                
                <!-- item-->
                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left">
                <i class="fa fa-fw fa-bars"></i>
                            </button>
                        </li>                        
                    </ul>

        </nav>

    </div>
    <!-- End Navigation -->