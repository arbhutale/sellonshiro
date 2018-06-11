<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Shiromani Mart</title>
    <meta name="description" content="Hound is a Dashboard & Admin Site Responsive Template by hencework." />
    <meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Hound Admin, Houndadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="hencework" />
    <!-- Favicon -->
    
    <link rel="shortcut icon" href="/Content/logo_X3y_icon.ico" />
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/jquery-wizard.js/css/wizard.css')}}">
    <!-- jquery-steps css -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/jquery.steps/demo/css/jquery.steps.css')}}">
    <!-- vector map CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/vectormap/jquery-jvectormap-2.0.2.css')}}">
    <!-- Custom Fonts -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/dist/css/font-awesome.min.css')}}">
    <!-- bootstrap-touchspin CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/morris.js/morris.css')}}">
    <!-- Data table CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/Content/dist/css/style.css')}}">
    <style>
        .brand-img {
            width: 100%;
        }

        @media only screen and (max-width: 767px) and (min-width: 320px) {
            .brand-img {
                width: 65%;
            }
        }

        .notifi{
      background: #e91e63;
    color: #fff;
    /* padding: 2px; */
    border-radius: 50%;
    font-size: 9px;
    top: 5px;
    height: 14px;
    line-height: 14px;
    width: 14px;
    text-align: center;
    position: absolute;
    left:28px;
    top:3px;
    /*right: 14px;*/
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div id="daaa" class="wrapper theme-1-active pimary-color-red">
        <!-- Top Menu Items -->
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#cacaca!important;">
            <div class="mobile-only-brand pull-left">
                <div class="nav-header pull-left">
                    <div class="logo-wrap">
                        <a href="#">
                            <img class="brand-img" src="{{ asset('css/LandingPage/SHIROMARTlogo2.png') }}" alt="brand"/>
                            
                        </a>
                    </div>
                </div>
               <a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i id="idaa" class="zmdi zmdi-menu hidden-sm hidden-md hidden-lg"></i></a>
    <a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i id="moreidd" class="zmdi zmdi-more"></i></a>

            </div>
            <div id="mobile_only_nav" class="mobile-only-nav pull-right">
                <ul class="nav navbar-right top-nav pull-right">
                    
                 
                    <li class="dropdown alert-drp" id="partial">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-notifications top-nav-icon"></i><span class="top-nav-icon-badge">4</span></a>
                         <ul class="dropdown-menu alert-dropdown" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut">
                            <li>
                                <div class="notification-box-head-wrap">
                                    <span class="notification-box-head pull-left inline-block">Notifications</span>
                                    <a class="txt-danger pull-right clear-notifications inline-block" id="notifclear" href="#"> Clear all </a>
                                    <div class="clearfix"></div>
                                    <hr class="light-grey-hr ma-0" />
                                </div>
                            </li>

                            <li>
                                <div class="streamline message-nicescroll-bar">
                                    <div class="sl-item">
                                        <a href="/Home/ReadNotification">
                                            <div class="icon bg-green">
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    PAN Details
                                                </span>
                                                <span class="inline-block font-11  pull-right notifications-time">Jan 30,2018</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your PAN Details has Apporved</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="/Home/ReadNotification">
                                            <div class="icon bg-green">
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    GST Details
                                                </span>
                                                <span class="inline-block font-11  pull-right notifications-time">Jan 30,2018</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your GST Details has Apporved</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="/Home/ReadNotification">
                                            <div class="icon bg-green">
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    ROC Details
                                                </span>
                                                <span class="inline-block font-11  pull-right notifications-time">Jan 30,2018</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your ROC Details has Apporved</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                    <div class="sl-item">
                                        <a href="/Home/ReadNotification">
                                            <div class="icon bg-green">
                                                <i class="zmdi zmdi-flag"></i>
                                            </div>
                                            <div class="sl-content">
                                                <span class="inline-block capitalize-font  pull-left truncate head-notifications">
                                                    Company Details
                                                </span>
                                                <span class="inline-block font-11  pull-right notifications-time">Jan 30,2018</span>
                                                <div class="clearfix"></div>
                                                <p class="truncate">Your Company Details has Apporved</p>
                                            </div>
                                        </a>
                                    </div>
                                    <hr class="light-grey-hr ma-0" />
                                </div>
                            </li>

                            <li>
                                <div class="notification-box-bottom-wrap">
                                    <hr class="light-grey-hr ma-0" />
                                    <a class="block text-center read-all" href="/Home/ReadNotification"> Read all </a>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </li>
                      
                    
                    <li class="dropdown auth-drp">
                        <a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('css/Content/userdemo.png') }}" alt="user_auth"
                                                          class="user-auth-img img-circle" style="float: left;
    /*margin-right: 87px;*/
    margin-top: 11px;"/><span class="user-online-status"></span></a>
                       <label style="float: right;color: #389aaa;">SALMAN</label>
                         <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                            <li>
                                <a href="/Home/MyProfile"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <a href="/Home/PasswordChange"><i class="fa fa-wrench  "></i><span>Change Password</span></a>
                            </li>
                           
                            <li>
                                <a href="/Home/Logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </nav>
        <!-- /Top Menu Items -->
        <!-- Left Sidebar Menu -->
        <div class="fixed-sidebar-left">
            <ul class="nav navbar-nav side-nav nicescroll-bar">
                <li class="navigation-header">
                    <span>Main</span>
                    <i class="zmdi zmdi-more"></i>
                </li>
                <li>
                    <a id="DashActive" href="/Home/Dashboard"><div class="pull-left"><i class="fa fa-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="CompActive" href="/Home/SellerApprovedDetails"><div class="pull-left"><i class="fa fa-briefcase mr-20"></i><span class="right-nav-text">Company Details</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="ProActive" href="/Home/MyProfile"><div class="pull-left"><i class="fa fa-user mr-20"></i><span class="right-nav-text">My-profile</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="BankActive" href="/Home/BankDetails"><div class="pull-left"><i class="fa fa-university mr-20"></i><span class="right-nav-text">Bank Details</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="PrdouctActive" href="/Home/ProductList"><div class="pull-left"><i class="fa fa-product-hunt mr-20"></i><span class="right-nav-text">Product-listing</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="OrderActive" href="#" data-toggle="collapse" data-target="#icon_dr1"><div class="pull-left"><i class="fa fa-shopping-cart mr-20"><span class="notifi">86</span></i><span class="right-nav-text">Orders</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="icon_dr1" class="collapse collapse-level-1">
                        <li>
                            <a id="neworder" href="/Home/OrdersList">New Orders</a>
                        </li>
                        <li>
                            <a id="neworder1" href="/Home/Accepetedorders">Accepeted orders</a>
                        </li>
                        <li>
                            <a id="neworder2" href="/Home/Pickuporders">Pick Up Orders</a>
                        </li>
                        <li>
                            <a id="neworder3" href="/Home/Shippedorders">HandOver orders</a>
                        </li>
                        <li>
                            <a id="neworder4" href="/Home/Deliveredorders">Delivered Orders</a>
                        </li>
                        <li>
                            <a id="neworder5" href="/Home/Completedorders">Completed Orders</a>
                        </li>
                       
                    </ul>
                </li>
              
                <li>
                    <a id="transActive" href="/Home/TransactionDetails"><div class="pull-left"><i class="fa fa-exchange mr-20"></i><span class="right-nav-text">Transactions</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>

                <li>
                    <a id="retActive" href="#" data-toggle="collapse" data-target="#icon_dr2"><div class="pull-left"><i class="fa fa-retweet mr-20"><span class="notifi" >0</span></i><span class="right-nav-text">Returns</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="icon_dr2" class="collapse collapse-level-1">
                        <li>
                            <a id="returnActive" href="/Home/ReturnsAndCancellationsProducts">Returns</a>
                        </li>
                        <li>
                            <a id="returnActive1" href="/Home/ReturnsfrombuyerProducts">Pick from Buyer</a>
                        </li>
                        <li>
                            <a id="returnActive2" href="/Home/ReturnstosellerProducts">Return to Seller</a>
                        </li>
                        

                    </ul>
                </li>

                
                <li>
                    <a id="CanActive" href="/Home/CancelledProducts"><div class="pull-left"><i class="fa fa-close mr-20"></i><span class="right-nav-text">Cancellations</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="advertActive" href="/Home/Advertisements"><div class="pull-left"><i class="fa fa-play-circle mr-20"></i><span class="right-nav-text">Advertisements</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="OfferActive" href="/Home/Offers"><div class="pull-left"><i class="fa fa-gift mr-20"></i><span class="right-nav-text">Offers</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="matricsActive" href="/Home/Matrics"><div class="pull-left"><i class="fa fa-line-chart mr-20"></i><span class="right-nav-text">Matrics</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="NotiActive" href="/Home/Notificationsforseller"><div class="pull-left"><i class="fa fa-bell mr-20"></i><span class="right-nav-text">Notifications</span></div><div class="pull-right"></div><div class="clearfix"></div></a>
                </li>
                <li>
                    <a id="guide" href="#" data-toggle="collapse" data-target="#icon_dr"><div class="pull-left"><i class="zmdi zmdi-iridescent mr-20"></i><span class="right-nav-text">Guideline tutorial</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
                    <ul id="icon_dr" class="collapse collapse-level-1">
                        <li>
                            <a href="/Home/Guidelines">Dashboard manager </a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines1">Details overview manager</a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines2">Product listing & update manager</a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines3">Orders manager </a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines4">Return & cancelation manager</a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines5">Payment manager</a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines6">Promotions & advertisement manager</a>
                        </li>
                        <li>
                            <a href="/Home/Guidelines7">Metrics / statistics manager</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>


<script type="text/javascript" src="{{URL::asset('css/Scripts/jquery-1.8.2.min.js')}}"></script>
<link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/sweetalert/dist/sweetalert.css')}}">
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
<link rel="stylesheet" href="{{URL::asset('css/Content/dist/css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/Content/vendors/bower_components/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
<link rel="stylesheet" href="https://resources/demos/style.css">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Main Content -->
<div class="page-wrapper">
    <div class="container-fluid pt-25">
        <!-- Row -->
        @yield('content')
        <!-- Row -->
    </div>

    <!-- Footer -->
    <footer class="footer container-fluid pl-30 pr-30">
        <div class="row">
            <div class="col-sm-12">
                <p>2017 &copy;Shiromani Mart</p>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

</div>
<!-- /Main Content -->

<script>
    $('#idaa').click(function () {
        var d = $('#daaa').hasClass('slide-nav-toggle');
       
        if (d == true) {
            $('#daaa').removeClass("slide-nav-toggle");
        }
        else
        {
            $('#daaa').addClass("slide-nav-toggle");
        }
      
    })
</script>
<script>
    $('#moreidd').click(function () {
        var d = $('#daaa').hasClass('mobile-nav-open');

        if (d == true) {
            $('#daaa').removeClass("mobile-nav-open");
        }
        else
        {
            $('#daaa').addClass("mobile-nav-open");
        }

    })
</script>
<script>
    $('#DashActive').addClass("active");
</script>

<script src=""></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/chart.js/Chart.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/raphael/raphael.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/dist/js/init.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/jszip/dist/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/pdfmake/build/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/pdfmake/build/vfs_fonts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/dist/js/export-table-data.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/moment/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/dist/js/simpleweather-data.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('css/Content/dist/js/dashboard-data.js')}}"></script>
<script>
    $('#example1').DataTable({
        dom: 'Bfrtip',
        buttons: [
'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
        <!-- /Main Content -->
       
    </div>
    <!-- /#wrapper -->
    <!-- JavaScript -->
    <!-- jQuery -->
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
    <!-- Form Wizard JavaScript -->
    <script src=""></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/jquery.steps/build/jquery.steps.min.js')}}"></script>
    <!-- Data table JavaScript -->
    <script src=""></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/dist/js/productorders-data.js')}}"></script>
    <!-- Bootstrap Touchspin JavaScript -->
    <script src=""></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <!-- Owl JavaScript -->
    <script src=""></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
    <!-- Product Checkout Data JavaScript -->
    <script type="text/javascript" src="{{URL::asset('css/Content/dist/js/product-checkout-data.js')}}"></script>
    <!-- Slimscroll JavaScript -->
    <script type="text/javascript" src="{{URL::asset('css/Content/dist/js/jquery.slimscroll.js')}}"></script>
    <!-- Fancy Dropdown JS -->
    <script type="text/javascript" src="{{URL::asset('css/Content/dist/js/dropdown-bootstrap-extended.js')}}"></script>
    <!-- Switchery JavaScript -->
    <script type="text/javascript" src="{{URL::asset('css/Content/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::asset('css/Content/dist/js/init.js')}}"></script>
  <script>
      $('#notifclear').click(function () {
        
          $.ajax({
              type: 'Post',
              url: '/Home/Clearallnotifications',
              success: function (data) {
                  $('#partial').html(data);
              }
          });



      })
  </script>
  
    
    
    
    
</body>

</html>
