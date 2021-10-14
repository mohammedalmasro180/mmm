<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="https://tpowep.com/admin.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->            <li class="nav-item active">
                <a class="nav-link" href="/post">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ادارة خدماتنا</span></a>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="/productall">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>ادارة الاخبار</span></a>
            </li>

            
            
            <li class="nav-item active">
                <a class="nav-link" href="/blockk">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>
                        الوظائف في الشاهين
                    </span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/editblock">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>تعرف على الشاهين</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/mailall">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>الرسائل</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>الموقع</span></a>
            </li>




                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    
    <a class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"  
    href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    {{ __('Logout') }}
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                        </form>
                
                </div>     <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-md-12">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        

                                    @yield("content")
                                        
                                </div>
                            </div>
                        </div>

        
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src='{{ asset("vendor/jquery/jquery.min.js") }}'></script>
    <script src='{{ asset("vendor/bootstrap/js/bootstrap.bundle.min.js") }}'></script>

    <!-- Core plugin JavaScript-->
    <script src='{{ asset("vendor/jquery-easing/jquery.easing.min.js") }}'></script>

    <!-- Custom scripts for all pages-->
    <script src='{{ asset("js/sb-admin-2.min.js") }}'></script>

    <!-- Page level plugins -->
    <script src='{{ asset("vendor/chart.js/Chart.min.js") }}'></script>

    <!-- Page level custom scripts -->
    <script src='{{ asset("js/demo/chart-area-demo.js") }}'></script>
    <script src='{{ asset("js/demo/chart-pie-demo.js") }}'></script>
    
  
</body>

</html>