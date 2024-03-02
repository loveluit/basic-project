<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>


</nav>



            
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
            <meta name="author" content="Coderthemes">
            <link rel="shortcut icon" href="{{URL::to('public/Admin/images/favicon_1.ico')}}">
            <title>Moltran - Responsive Admin Dashboard Template</title>
    
            <!-- Base Css Files -->
            <link href="{{asset('Admin/css/bootstrap.min.css')}}" rel="stylesheet" />
    
            <!-- Font Icons -->
            <link href="public/Admin/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
            <link href="public/Admin/assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
            <link href="{{asset('Admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
    
            <!-- animate css -->
            <link href="{{asset('Admin/css/animate.css')}}" rel="stylesheet" />
    
            <!-- Waves-effect -->
            <link href="{{asset('Admin/css/waves-effect.css')}}" rel="stylesheet">
    
            <!-- sweet alerts -->
            <link href="public/Admin/assets/sweet-alert/sweet-alert.min.css" rel="stylesheet">
    
            <!-- Custom Files -->
            <link href="{{asset('Admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
            <link href="{{asset('Admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
            <![endif]-->
    
            <script src="{{asset('Admin/js/modernizr.min.js')}}"></script>
            
        </head>
    
    
    
        <body class="fixed-left">
            
            <!-- Begin page -->
            <div id="wrapper">
            
                <!-- Top Bar Start -->
                <div class="topbar">
                    <!-- LOGO -->
                    <div class="topbar-left">
                        <div class="text-center">
                            <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                        </div>
                    </div>
                    <!-- Button mobile view to collapse sidebar menu -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container">
                            <div class="">
                                <div class="pull-left">
                                    <button class="button-menu-mobile open-left">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                    <span class="clearfix"></span>
                                </div>
                                <form class="navbar-form pull-left" role="search">
                                    <div class="form-group">
                                        <input type="text" class="form-control search-bar" placeholder="Type here for search...">
                                    </div>
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                </form>
    
                                <ul class="nav navbar-nav navbar-right pull-right">
                                    <li class="dropdown hidden-xs">
                                        <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                            <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">3</span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-lg">
                                            <li class="text-center notifi-title">Notification</li>
                                            <li class="list-group">
                                               <!-- list item-->
                                               <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-user-plus fa-2x text-info"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">New user registered</div>
                                                        <p class="m-0">
                                                           <small>You have 10 unread messages</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </a>
                                               <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-diamond fa-2x text-primary"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">New settings</div>
                                                        <p class="m-0">
                                                           <small>There are new settings available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                                </a>
                                                <!-- list item-->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <div class="media">
                                                     <div class="pull-left">
                                                        <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                     </div>
                                                     <div class="media-body clearfix">
                                                        <div class="media-heading">Updates</div>
                                                        <p class="m-0">
                                                           <small>There are
                                                              <span class="text-primary">2</span> new updates available</small>
                                                        </p>
                                                     </div>
                                                  </div>
                                                </a>
                                               <!-- last list item -->
                                                <a href="javascript:void(0);" class="list-group-item">
                                                  <small>See all notifications</small>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                    </li>
                                    <li class="hidden-xs">
                                        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{URL::to("public/Admin/images/avatar-1.jpg")}}" alt="user-img" class="img-circle"> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                            <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                            <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>
                                            
                                            
                        
                        
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                        
                                                    <x-dropdown-link :href="route('logout')"
                                                            onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                                        {{ __('Log Out') }}
                                                    </x-dropdown-link>
                                                </form>
                                            
                                            
                                            </li>

                                         

                                         

                                          

                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </div>
                </div>
                <!-- Top Bar End -->
    
    
                <!-- ========== Left Sidebar Start ========== -->
    
                <div class="left side-menu">
                    <div class="sidebar-inner slimscrollleft">
                        <div class="user-details">
                            <div class="pull-left">
                                <img src="{{URL::to("public/Admin/images/users/avatar-1.jpg")}}" alt="" class="thumb-md img-circle">
                            </div>
                            <div class="user-info">
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">John Doe <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>

                                        <li><a href=  ""><i class="md md-lock"></i> Logout</a>
                                        
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                    
                                                <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                                    {{ __('Log Out') }}
                                                </x-dropdown-link>
                                            </form>
                                        
                                        
                                        </li>


                              


                                    </ul>
                                </div>
                                
                                <p class="text-muted m-0">Administrator</p>
                            </div>
                        </div>
                        <!--- Divider -->
                        <div id="sidebar-menu">
                            <ul>
                                <li>
                                    <a href="{{ route('dashboard') }}" class="waves-effect active"><i class="md md-home"></i><span> Dashboard </span></a>
                                </li>
    
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Costomar </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="{{Route('home.insert')}}">Add Product</a></li>
                                        <li><a href="{{Route('home.home')}}">All Datels</a></li>
                                        <li><a href="email-read.html">View Mail</a></li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                                </li>
    
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-palette"></i> <span> Elements </span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="panels.html">Panels</a></li>
                                        <li><a href="checkbox-radio.html">Checkboxs-Radios</a></li>
                                        <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                        <li><a href="modals.html">Modals</a></li>
                                        <li><a href="bootstrap-ui.html">BS Elements</a></li>
                                        <li><a href="progressbars.html">Progress Bars</a></li>
                                        <li><a href="notification.html">Notification</a></li>
                                        <li><a href="sweet-alert.html">Sweet-Alert</a></li>
                                    </ul>
                                </li>
    
                                <li class="has_sub">
                                    <a href="#" class="waves-effect"><i class="md md-invert-colors-on"></i><span> Components </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="grid.html">Grid</a></li>
                                        <li><a href="portlets.html">Portlets</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                        <li><a href="nestable-list.html">Nesteble</a></li>
                                        <li><a href="ui-sliders.html">Sliders </a></li>
                                        <li><a href="gallery.html">Gallery </a></li>
                                        <li><a href="pricing.html">Pricing Table </a></li>
                                    </ul>
                                </li>


    
                             
    
                             
    
    
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <!-- Left Sidebar End --> 
    
    
    
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->                      
                <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container">
    
                            <!-- Page-Title -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="pull-left page-title">Welcome !</h4>
                                    <ol class="breadcrumb pull-right">
                                        <li><a href="#">Moltran</a></li>
                                        <li class="active">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
    
                            <!-- Start Widget -->
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="mini-stat clearfix bx-shadow">
                                        <span class="mini-stat-icon bg-info"><i class="ion-social-usd"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter">15852</span>
                                            Total Sales
                                        </div>
                                        <div class="tiles-progress">
                                            <div class="m-t-20">
                                                <h5 class="text-uppercase">Sales <span class="pull-right">60%</span></h5>
                                                <div class="progress progress-sm m-0">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="mini-stat clearfix bx-shadow">
                                        <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter">956</span>
                                            New Orders
                                        </div>
                                        <div class="tiles-progress">
                                            <div class="m-t-20">
                                                <h5 class="text-uppercase">Orders <span class="pull-right">90%</span></h5>
                                                <div class="progress progress-sm m-0">
                                                    <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                        <span class="sr-only">90% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="mini-stat clearfix bx-shadow">
                                        <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter">20544</span>
                                            Unique Visitors
                                        </div>
                                        <div class="tiles-progress">
                                            <div class="m-t-20">
                                                <h5 class="text-uppercase">Visitors <span class="pull-right">60%</span></h5>
                                                <div class="progress progress-sm m-0">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-md-6 col-sm-6 col-lg-3">
                                    <div class="mini-stat clearfix bx-shadow">
                                        <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                        <div class="mini-stat-info text-right text-muted">
                                            <span class="counter">5210</span>
                                            New Users
                                        </div>
                                        <div class="tiles-progress">
                                            <div class="m-t-20">
                                                <h5 class="text-uppercase">Users <span class="pull-right">57%</span></h5>
                                                <div class="progress progress-sm m-0">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                        <span class="sr-only">57% Complete</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <!-- End row-->
    
    
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="portlet"><!-- /portlet heading -->
                                        <div class="portlet-heading">
                                            <h3 class="portlet-title text-dark text-uppercase">
                                                Website Stats
                                            </h3>
                                            <div class="portlet-widgets">
                                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                <span class="divider"></span>
                                                <a data-toggle="collapse" data-parent="#accordion1" href="#portlet1"><i class="ion-minus-round"></i></a>
                                                <span class="divider"></span>
                                                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="portlet1" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="website-stats" style="position: relative;height: 320px;"></div>
                                                        <div class="row text-center m-t-30">
                                                            <div class="col-sm-4">
                                                                <h4 class="counter">86,956</h4>
                                                                <small class="text-muted"> Weekly Report</small>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4 class="counter">86,69</h4>
                                                                <small class="text-muted">Monthly Report</small>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <h4 class="counter">948,16</h4>
                                                                <small class="text-muted">Yearly Report</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /Portlet -->
                                </div> <!-- end col -->
    
                                <div class="col-lg-4">
                                    <div class="portlet"><!-- /portlet heading -->
                                        <div class="portlet-heading">
                                            <h3 class="portlet-title text-dark text-uppercase">
                                                Website Stats
                                            </h3>
                                            <div class="portlet-widgets">
                                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                                <span class="divider"></span>
                                                <a data-toggle="collapse" data-parent="#accordion1" href="#portlet2"><i class="ion-minus-round"></i></a>
                                                <span class="divider"></span>
                                                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div id="portlet2" class="panel-collapse collapse in">
                                            <div class="portlet-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div id="pie-chart">
                                                            <div id="pie-chart-container" class="flot-chart" style="height: 320px;">
                                                            </div>
                                                        </div>
    
                                                        <div class="row text-center m-t-30">
                                                            <div class="col-sm-6">
                                                                <h4 class="counter">86,956</h4>
                                                                <small class="text-muted"> Weekly Report</small>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <h4 class="counter">86,69</h4>
                                                                <small class="text-muted">Monthly Report</small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- /Portlet -->
                                </div> <!-- end col -->
                            </div> <!-- End row -->
    
    
                            <div class="row">
                                <!-- INBOX -->
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">Inbox</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="inbox-widget nicescroll mx-box">
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-1.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Chadengle</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">13:40 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-2.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Tomaslau</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">13:34 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-3.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Stillnotdavid</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">13:17 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-4.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Kurafire</p>
                                                        <p class="inbox-item-text">Nice to meet you</p>
                                                        <p class="inbox-item-date">12:20 PM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-5.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Shahedk</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-6.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Adhamdannaway</p>
                                                        <p class="inbox-item-text">This theme is awesome!</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-8.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Arashasghari</p>
                                                        <p class="inbox-item-text">Hey! there I'm available...</p>
                                                        <p class="inbox-item-date">10:15 AM</p>
                                                    </div>
                                                </a>
                                                <a href="#">
                                                    <div class="inbox-item">
                                                        <div class="inbox-item-img"><img src="images/users/avatar-9.jpg" class="img-circle" alt=""></div>
                                                        <p class="inbox-item-author">Joshaustin</p>
                                                        <p class="inbox-item-text">I've finished it! See you so...</p>
                                                        <p class="inbox-item-date">9:56 AM</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
    
                                <!-- CHAT -->
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Chat</h3> 
                                        </div> 
                                        <div class="panel-body"> 
                                            <div class="chat-conversation">
                                                <ul class="conversation-list nicescroll">
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="images/avatar-1.jpg" alt="male">
                                                            <i>10:00</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>John Deo</i>
                                                                <p>
                                                                    Hello!
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="images/users/avatar-5.jpg" alt="Female">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Smith</i>
                                                                <p>
                                                                    Hi, How are you? What about our next meeting?
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix">
                                                        <div class="chat-avatar">
                                                            <img src="images/avatar-1.jpg" alt="male">
                                                            <i>10:01</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>John Deo</i>
                                                                <p>
                                                                    Yeah everything is fine
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="clearfix odd">
                                                        <div class="chat-avatar">
                                                            <img src="images/users/avatar-5.jpg" alt="male">
                                                            <i>10:02</i>
                                                        </div>
                                                        <div class="conversation-text">
                                                            <div class="ctext-wrap">
                                                                <i>Smith</i>
                                                                <p>
                                                                    Wow that's great
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="row">
                                                    <div class="col-sm-9 chat-inputbar">
                                                        <input type="text" class="form-control chat-input" placeholder="Enter your text">
                                                    </div>
                                                    <div class="col-sm-3 chat-send">
                                                        <button type="submit" class="btn btn-info btn-block waves-effect waves-light">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div> <!-- end col-->
    
    
                                <!-- TODO -->
                                <div class="col-lg-4">
                                    <div class="panel panel-default">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Todo</h3> 
                                        </div> 
                                        <div class="panel-body todoapp"> 
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h4 id="todo-message"><span id="todo-remaining"></span> of <span id="todo-total"></span> remaining</h4> 
                                                </div>
                                                <div class="col-sm-6">
                                                    <a href="" class="pull-right btn btn-primary btn-sm waves-effect waves-light" id="btn-archive">Archive</a>
                                                </div>
                                            </div>
    
                                            <ul class="list-group no-margn nicescroll todo-list" style="max-height: 288px;" id="todo-list"></ul>
    
                                             <form name="todo-form" id="todo-form" role="form" class="m-t-20">
                                                <div class="row">
                                                    <div class="col-sm-9 todo-inputbar">
                                                        <input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
                                                    </div>
                                                    <div class="col-sm-3 todo-send">
                                                        <button class="btn-primary btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
                                                    </div>
                                                </div>
                                            </form> 
                                        </div> 
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    
                        </div> <!-- container -->
                                   
                    </div> <!-- content -->
    
                    <footer class="footer text-right">
                        2015 © Moltran.
                    </footer>
    
                </div>
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->
    
    
                <!-- Right Sidebar -->
                <div class="side-bar right-bar nicescroll">
                    <h4 class="text-center">Chat</h4>
                    <div class="contact-list nicescroll">
                        <ul class="list-group contacts-list">
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-1.jpg" alt="">
                                    </div>
                                    <span class="name">Chadengle</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-2.jpg" alt="">
                                    </div>
                                    <span class="name">Tomaslau</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-3.jpg" alt="">
                                    </div>
                                    <span class="name">Stillnotdavid</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-4.jpg" alt="">
                                    </div>
                                    <span class="name">Kurafire</span>
                                    <i class="fa fa-circle online"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-5.jpg" alt="">
                                    </div>
                                    <span class="name">Shahedk</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-6.jpg" alt="">
                                    </div>
                                    <span class="name">Adhamdannaway</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-7.jpg" alt="">
                                    </div>
                                    <span class="name">Ok</span>
                                    <i class="fa fa-circle away"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-8.jpg" alt="">
                                    </div>
                                    <span class="name">Arashasghari</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-9.jpg" alt="">
                                    </div>
                                    <span class="name">Joshaustin</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                            <li class="list-group-item">
                                <a href="#">
                                    <div class="avatar">
                                        <img src="images/users/avatar-10.jpg" alt="">
                                    </div>
                                    <span class="name">Sortino</span>
                                    <i class="fa fa-circle offline"></i>
                                </a>
                                <span class="clearfix"></span>
                            </li>
                        </ul>  
                    </div>
                </div>
                <!-- /Right-bar -->
    
            </div>
            <!-- END wrapper -->
    
    
        
            <script>
                var resizefunc = [];
            </script>
    
            <!-- jQuery  -->
            <script src="{{asset('Admin/js/jquery.min.js')}}"></script>
            <script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('Admin/js/waves.js')}}"></script>
            <script src="{{asset('Admin/js/wow.min.js')}}"></script>
            <script src="{{asset('Admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
            <script src="{{asset('Admin/js/jquery.scrollTo.min.js')}}"></script>
            <script src="public/Admin/assets/chat/moment-2.2.1.js"></script>
            <script src="public/Admin/assets/jquery-sparkline/jquery.sparkline.min.js"></script>public/
            <script src="public/Admin/assets/jquery-detectmobile/detect.js"></script>
            <script src="public/Admin/assets/fastclick/fastclick.js"></script>
            <script src="public/Admin/assets/jquery-slimscroll/jquery.slimscroll.js"></script>
            <script src="public/Admin/assets/jquery-blockui/jquery.blockUI.js"></script>
    
            <!-- sweet alerts -->
            <script src="Admin/assets/sweet-alert/sweet-alert.min.js"></script>
            <script src="Admin/assets/sweet-alert/sweet-alert.init.js"></script>
    
            <!-- flot Chart -->
            <script src="public/Admin/assets/flot-chart/jquery.flot.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.time.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.tooltip.min.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.resize.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.pie.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.selection.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.stack.js"></script>
            <script src="public/Admin/assets/flot-chart/jquery.flot.crosshair.js"></script>
    
            <!-- Counter-up -->
            <script src="public/Admin/assets/counterup/waypoints.min.js" type="text/javascript"></script>
            <script src="public/Admin/assets/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            
            <!-- CUSTOM JS -->
            <script src="{{asset('Admin/js/jquery.app.js')}}"></script>
    
            <!-- Dashboard -->
            <script src="{{asset('Admin/js/jquery.dashboard.js')}}"></script>
    
            <!-- Chat -->
            <script src="{{asset('Admin/js/jquery.chat.js')}}"></script>
    
            <!-- Todo -->
            <script src="{{asset('Admin/js/jquery.todo.js')}}"></script>
    
            <script type="{{asset('Admin/text/javascript')}}">
                /* ==============================================
                Counter Up
                =============================================== */
                jQuery(document).ready(function($) {
                    $('.counter').counterUp({
                        delay: 100,
                        time: 1200
                    });
                });
            </script>
        
        </body>
    </html>
    


        </div>






    









   