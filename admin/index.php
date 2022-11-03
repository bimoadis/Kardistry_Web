<?php
session_start();

require_once("function.php");

// if(isset($_POST["submit"])){
//   is (tambah($_POST) > 0){

//   }
// }
$class = query("SELECT * FROM class");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- End layout styles -->

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><img src="assets/images/logo.svg" alt="logo" /></a>
        <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
                <img src="assets/images/faces/face28.png" alt="image">
              </div>
              <div class="nav-profile-text">
                <p class="mb-1 text-black">Henry Klein</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/images/faces/face28.png" alt="">
              </div>
              <div class="p-2">
                <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Inbox</span>
                  <span class="p-0">
                    <span class="badge badge-primary">3</span>
                    <i class="mdi mdi-email-open-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="javascript:void(0)">
                  <span>Settings</span>
                  <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Lock Account</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="../loguot.php">
                  <span>Log Out</span>
                  <i class="mdi mdi-logout ml-1"></i>
                </a>
              </div>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>



    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.php">
              <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.php">
              <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
              <span class="menu-title">Tables</span>
            </a>
          </li>

          <li class="nav-item sidebar-user-actions">
            <div class="user-details">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <div class="d-flex align-items-center">
                    <div class="sidebar-profile-img">
                      <img src="assets/images/faces/face28.png" alt="image">
                    </div>
                    <div class="sidebar-profile-text">
                      <p class="mb-1">Henry Klein</p>
                    </div>
                  </div>
                </div>
                <div class="badge badge-danger">3</div>
              </div>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
          </li>
        </ul>
      </nav>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" id="proBanner">
            <div class="col-12">
              <span class="d-flex align-items-center purchase-popup">
                <p>Like what you see? Check out our premium version for more.</p>
                <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                <i class="mdi mdi-close" id="bannerClose"></i>
              </span>
            </div>
          </div>
          <div class="d-xl-flex justify-content-between align-items-start">
            <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
            <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
              <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
                <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
                <button type="button" class="btn btn-link text-light py-0">3 Month</button>
              </div>
              <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
                <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                  <h6 class="dropdown-header">Settings</h6>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                <ul class="nav nav-tabs tab-transparent" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab" aria-selected="true">Users</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1" role="tab" aria-selected="false">Business</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Performance</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab" aria-selected="false">Conversion</a>
                  </li>
                </ul>
                <div class="d-md-block d-none">
                  <a href="#" class="text-light p-1"><i class="mdi mdi-view-dashboard"></i></a>
                  <a href="#" class="text-light p-1"><i class="mdi mdi-dots-vertical"></i></a>
                </div>
              </div>
              <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                  <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                          <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Completed</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                          <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Increased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                          <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-eye icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Increased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body text-center">
                          <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                          <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                          <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                            <i class="mdi mdi-cube icon-md absolute-center text-dark"></i>
                          </div>
                          <p class="mt-4 mb-0">Decreased since yesterday</p>
                          <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 grid-margin">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-12">
                              <div class="d-flex justify-content-between align-items-center mb-4">
                                <h4 class="card-title mb-0">Recent Activity</h4>
                                <div class="dropdown dropdown-arrow-none">
                                  <button class="btn p-0 text-dark dropdown-toggle" type="button" id="dropdownMenuIconButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                  </button>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuIconButton1">
                                    <h6 class="dropdown-header">Settings</h6>
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-3 col-sm-4 grid-margin  grid-margin-lg-0">
                              <div class="wrapper pb-5 border-bottom">
                                <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                  <p class="mb-0 text-dark">Total Profit</p>
                                  <span class="text-success"><i class="mdi mdi-arrow-up"></i>2.95%</span>
                                </div>
                                <h3 class="mb-0 text-dark font-weight-bold">$ 92556</h3>
                                <canvas id="total-profit"></canvas>
                              </div>
                              <div class="wrapper pt-5">
                                <div class="text-wrapper d-flex align-items-center justify-content-between mb-2">
                                  <p class="mb-0 text-dark">Expenses</p>
                                  <span class="text-success"><i class="mdi mdi-arrow-up"></i>52.95%</span>
                                </div>
                                <h3 class="mb-4 text-dark font-weight-bold">$ 59565</h3>
                                <canvas id="total-expences"></canvas>
                              </div>
                            </div>
                            <div class="col-lg-9 col-sm-8 grid-margin  grid-margin-lg-0">
                              <div class="pl-0 pl-lg-4 ">
                                <div class="d-xl-flex justify-content-between align-items-center mb-2">
                                  <div class="d-lg-flex align-items-center mb-lg-2 mb-xl-0">
                                    <h3 class="text-dark font-weight-bold mr-2 mb-0">Devices sales</h3>
                                    <h5 class="mb-0">( growth 62% )</h5>
                                  </div>
                                  <div class="d-lg-flex">
                                    <p class="mr-2 mb-0">Timezone:</p>
                                    <p class="text-dark font-weight-bold mb-0">GMT-0400 Eastern Delight Time</p>
                                  </div>
                                </div>
                                <div class="graph-custom-legend clearfix" id="device-sales-legend"></div>
                                <canvas id="device-sales"></canvas>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 grid-margin stretch-card">
                      <div class="card card-danger-gradient">
                        <div class="card-body mb-4">
                          <h4 class="card-title text-white">Account Retention</h4>
                          <canvas id="account-retension"></canvas>
                        </div>
                        <div class="card-body bg-white pt-4">
                          <div class="row pt-4">
                            <div class="col-sm-6">
                              <div class="text-center border-right border-md-0">
                                <h4>Conversion</h4>
                                <h1 class="text-dark font-weight-bold mb-md-3">$306</h1>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="text-center">
                                <h4>Cancellation</h4>
                                <h1 class="text-dark font-weight-bold">$1,520</h1>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-8  grid-margin stretch-card">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-xl-flex justify-content-between mb-2">
                            <h4 class="card-title">Page views analytics</h4>
                            <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend"></div>
                          </div>
                          <canvas id="page-view-analytic"></canvas>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="footer-inner-wraper">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com
                2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from
                Bootstrapdash.com</span>
            </div>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/jquery-circle-progress/js/circle-progress.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
</body>

</html>