<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>RK Test Shop</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- vector map CSS -->
    <link href="<?= base_url() ?>assets/vendors/vectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" type="text/css" />
	
	<!-- Morris Charts CSS -->
    <link href="<?= base_url() ?>assets/vendors/morris.js/morris.css" rel="stylesheet" type="text/css" />
	
    <!-- Toggles CSS -->
    <link href="<?= base_url() ?>assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
	
    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
	
	<!-- HK Wrapper -->
	<div class="hk-wrapper hk-horizontal-nav">

        <!-- Top Navbar -->
        <nav class="navbar navbar-expand-xl navbar-light fixed-top hk-navbar">
            <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
            <a class="navbar-brand" href="dashboard1.html">
                <img class="brand-img d-inline-block" src="<?= base_url() ?>assets/dist/img/logo-light.png" alt="brand" />
            </a>
            <ul class="navbar-nav hk-navbar-content">
                <li class="nav-item">
                    <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
                </li>
                <li class="nav-item">
                    <a id="settings_toggle_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="settings"></i></span></a>
                </li>
                <li class="nav-item dropdown dropdown-notifications">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="feather-icon"><i data-feather="bell"></i></span><span class="badge-wrap"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill pulse"></span></span></a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                        <h6 class="dropdown-header">Notifications <a href="javascript:void(0);" class="">View all</a></h6>
                        <div class="notifications-nicescroll-bar">
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="<?= base_url() ?>assets/dist/img/avatar1.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text"><span class="text-dark text-capitalize">Evie Ono</span> accepted your invitation to join the team</div>
                                            <div class="notifications-time">12m</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <img src="<?= base_url() ?>assets/dist/img/avatar2.jpg" alt="user" class="avatar-img rounded-circle">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">New message received from <span class="text-dark text-capitalize">Misuko Heid</span></div>
                                            <div class="notifications-time">1h</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-primary rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-account font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">You have a follow up with<span class="text-dark text-capitalize"> Mintos head</span> on <span class="text-dark text-capitalize">friday, dec 19</span> at <span class="text-dark">10.00 am</span></div>
                                            <div class="notifications-time">2d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-success rounded-circle">
													<span class="initial-wrap"><span>A</span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Application of <span class="text-dark text-capitalize">Sarah Williams</span> is waiting for your approval</div>
                                            <div class="notifications-time">1w</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:void(0);" class="dropdown-item">
                                <div class="media">
                                    <div class="media-img-wrap">
                                        <div class="avatar avatar-sm">
                                            <span class="avatar-text avatar-text-warning rounded-circle">
													<span class="initial-wrap"><span><i class="zmdi zmdi-notifications font-18"></i></span></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <div>
                                            <div class="notifications-text">Last 2 days left for the project</div>
                                            <div class="notifications-time">15d</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-authentication">
                    <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <div class="media-img-wrap">
                                <div class="avatar">
                                    <img src="<?= base_url() ?>assets/dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                                </div>
                                <span class="badge badge-success badge-indicator"></span>
                            </div>
                            <div class="media-body">
                                <span>Madelyn Shane<i class="zmdi zmdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                        <a class="dropdown-item" href="profile.html"><i class="dropdown-icon zmdi zmdi-account"></i><span>Profile</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-card"></i><span>My balance</span></a>
                        <a class="dropdown-item" href="inbox.html"><i class="dropdown-icon zmdi zmdi-email"></i><span>Inbox</span></a>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-settings"></i><span>Settings</span></a>
                        <div class="dropdown-divider"></div>
                        <div class="sub-dropdown-menu show-on-hover">
                            <a href="#" class="dropdown-toggle dropdown-item no-caret"><i class="zmdi zmdi-check text-success"></i>Online</a>
                            <div class="dropdown-menu open-left-side">
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-check text-success"></i><span>Online</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-circle-o text-warning"></i><span>Busy</span></a>
                                <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-minus-circle-outline text-danger"></i><span>Offline</span></a>
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <form role="search" class="navbar-search">
            <div class="position-relative">
                <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
                <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
                <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
            </div>
        </form>
        <!-- /Top Navbar -->
		
        <!--Horizontal Nav-->
        <nav class="hk-nav hk-nav-light">
            <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
            <div class="nicescroll-bar">
                <div class="navbar-nav-wrap">
                    <ul class="navbar-nav flex-row">
                        <li class="nav-item active">
                            <a class="nav-link" href="javascript:void(0);">
                                <span class="feather-icon"><i data-feather="activity"></i></span>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="shopping-cart"></i></span>
                                <span class="nav-link-text">Oders</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">View Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">New Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Pending Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#auth_drp">Refunds</a>
                                            <ul id="auth_drp" class="nav flex-column collapse collapse-level-2">
                                              <li class="nav-item">
                                                <ul class="nav flex-column">
                                                  <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">New Refund</a>   
                                                  </li>
                                                  <li class="nav-item">
                                                    <a class="nav-link" href="javascript:void(0);">View Refunds</a>   
                                                  </li>
                                                </ul>
                                              </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="camera"></i></span>
                                <span class="nav-link-text">Products</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">View Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">New Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">SKU Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Product Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Discounts</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><span class="badge badge-primary badge-indicator badge-indicator-sm badge-pill"></span><i data-feather="package"></i></span>
                                <span class="nav-link-text">Suppilers</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">View Suppliers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">New Supplier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Supplier Status</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="documentation.html" >
                                <span class="feather-icon"><i data-feather="credit-card"></i></span>
                                <span class="nav-link-text">Invoices</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="users"></i></span>
                                <span class="nav-link-text">Clients</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">New Client</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">Client Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Manage Clients</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-badge" href="#">
                                <span class="feather-icon"><i data-feather="dollar-sign"></i></span>
                                <span class="nav-link-text">Accounting</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-badge" href="#">
                                <span class="feather-icon"><i data-feather="settings"></i></span>
                                <span class="nav-link-text">Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-with-indicator" href="javascript:void(0);" data-toggle="collapse" data-target="#app_drp">
                                <span class="feather-icon"><i data-feather="link-2"></i></span>
                                <span class="nav-link-text">Users</span>
                            </a>
                            <ul id="app_drp" class="nav flex-column collapse collapse-level-1">
                                <li class="nav-item">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="chats.html">New User</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="calendar.html">User Status</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Manage Users</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="email.html">Manage Roles</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
        <!--/Horizontal Nav-->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container-fluid mt-xl-50 mt-sm-30 mt-15">