
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
                                <li><a href="{{Route('home.home')}}">All Detals</a></li>
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

                    <!-- Insert Data -->
                 

           



                    
<div class="container mt-3">
    <h2>Data Insert</h2>
    <form action="{{URL::to('store')}}" method="Post" enctype="multipart/form-data">
  
    @csrf
  
      <div class="mb-3 mt-3">
        <label for="name">Name:</label>
        <input type="name" class="form-control" id="name" placeholder="Enter Name" name="name">
      </div>
  
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
  
      <div class="mb-3 mt-3">
        <label for="phone">Phone:</label>
        <input type="phone" class="form-control" id="phone" placeholder="Enter phone" name="phone">
      </div>
  
      <div class="mb-3">
        <label for="description">Title:</label>
        <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="title"></textarea>
      </div>

      <div class="mb-3">
        <label for="description">Author:</label>
        <textarea type="text" class="form-control" id="description" placeholder="Enter Description" name="author"></textarea>
      </div>

      
      <div class="mb-3 mt-3">
        <label for="phone">Image:</label>
        <input type="file" class="form-control" id="phone" placeholder="Enter photo" name="image">
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


                
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



<H1>insert</H1>