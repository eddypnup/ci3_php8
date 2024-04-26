<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/vendors/feather/feather.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/admin/vendors/ti-icons/css/themify-icons.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/admin/vendors/css/vendor.bundle.base.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/admin/product/icon.css')?>" />

    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?base_url('assets/admin/css/select.dataTables.min.css')?>"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?=base_url('assets/admin/css/vertical-layout-light/style.css')?>" />
    <!-- endinject -->
    <link rel="shortcut icon" href="<?=base_url('assets/images/favicon.png')?>" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div
          class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center"
        >
          <a class="navbar-brand brand-logo mr-5" href="index.html"
            ><h2>JoywayID</h2></a
          >
        </div>
        <div
          class="navbar-menu-wrapper d-flex align-items-center justify-content-end"
        >
          <button
            class="navbar-toggler navbar-toggler align-self-center"
            type="button"
            data-toggle="minimize"
          >
            <span class="icon-menu"></span>
          </button>
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <div
                  class="input-group-prepend hover-cursor"
                  id="navbar-search-icon"
                >
                  <span class="input-group-text" id="search">
                    <i class="icon-search"></i>
                  </span>
                </div>
                <input
                  type="text"
                  class="form-control"
                  id="navbar-search-input"
                  placeholder="Search now"
                  aria-label="search"
                  aria-describedby="search"
                />
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle"
                id="notificationDropdown"
                href="#"
                data-toggle="dropdown"
              >
                <i class="icon-bell mx-0"></i>
                <span class="count"></span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                aria-labelledby="notificationDropdown"
              >
                <p class="mb-0 font-weight-normal float-left dropdown-header">
                  Notifications
                </p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="ti-info-alt mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">
                      Application Error
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="ti-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="ti-user mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">
                      New user registration
                    </h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link count-indicator dropdown-toggle"
                id="notificationDropdown"
                href="cart.html"
              >
                <i class="icon-cart mx-0"></i>
              </a>
            </li>
          </ul>
          <button
            class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
            type="button"
            data-toggle="offcanvas"
          >
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->

        <!-- partial -->
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <!-- Dashboard -->
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <!-- Product -->
            <li class="nav-item">
              <a class="nav-link" href="./pages/product/kategori.html">
                <i class="icon-box menu-icon"></i>
                <span class="menu-title">Product</span>
              </a>
            </li>
            <!-- Cari Partner -->
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#ui-basic"
                aria-expanded="false"
                aria-controls="ui-basic"
              >
                <i class="icon-eye menu-icon"></i>
                <span class="menu-title">Cari Partner Kota</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="./cari-partner-barang.html"
                      >Berdasarkan Barang</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="./cari-berdasarkan-kota.html"
                      >Berdasarkan Kota</a
                    >
                  </li>
                </ul>
              </div>
            </li>
            <br />

            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <span class="menu-title text-dark">Account</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profile</span>
              </a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#keuangan"
                aria-expanded="false"
                aria-controls="ui-basic"
              >
                <i class="icon-book menu-icon"></i>
                <span class="menu-title">Keuangan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="keuangan">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="manage-pemasukan.html"
                      >Manage Pemasukan</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="manage-pengeluaran.html"
                      >Manage Pengeluaran</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="laporan-keuangan.html"
                      >Laporan Keuangan</a
                    >
                  </li>
                </ul>
              </div>
            </li>

            <br />
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <span class="menu-title text-dark">Order Pembelian</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="riwayat_pembelian.html"
                aria-controls="auth"
              >
                <i class="icon-bag menu-icon"></i>
                <span class="menu-title">Riwayat Pembelian</span>
              </a>
            </li>
            <br />
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <span class="menu-title text-dark">Billing</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="payment.html">
                <i class="icon-alt menu-icon"></i>
                <span class="menu-title">Payment</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="deposit.html">
                <i class="icon-bar-graph-2 menu-icon"></i>
                <span class="menu-title">Deposit</span>
              </a>
            </li>
            <br />
            <li class="nav-item">
              <a href="javascript:void(0);" class="nav-link">
                <span class="menu-title text-dark">Support</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
              >
                <i class="icon-heart menu-icon"></i>
                <span class="menu-title">Contact</span>
              </a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-toggle="collapse"
                href="#auth"
                aria-expanded="false"
                aria-controls="auth"
              >
                <i class="icon-flag menu-icon"></i>
                <span class="menu-title">Panduan Resseler</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/cek-ongkir/cek-ongkir.html">
                <i class="icon-search menu-icon"></i>
                <span class="menu-title">Cek Ongkir</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pages/login/login.html">
                <i class="icon-power menu-icon"></i>
                <span class="menu-title">Log Out</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="row">
                  <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Welcome Selly</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin transparent">
                <div class="row">
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-tale">
                      <div class="card-body">
                        <p class="mb-4">Top Up Deposit</p>
                        <p class="mb-2">Rp.143,905</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4 stretch-card transparent">
                    <div class="card card-dark-blue">
                      <div class="card-body">
                        <p class="mb-4">Status Resseler</p>
                        <p class="mb-2">Normal Resseler</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                    <div class="card card-light-blue">
                      <div class="card-body">
                        <p class="mb-4">Reputasi</p>
                        <p class="mb-2">Pedagang Kecil</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 stretch-card transparent">
                    <div class="card card-light-danger">
                      <div class="card-body">
                        <p class="mb-4">Total Pemembelian</p>
                        <p class="mb-2">Rp23.630.335</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-title text-primary font-weight-bold">
                      LEADBOARD OMZET TERBESAR BULAN INI
                    </p>
                    <div class="row">
                      <div class="col-12">
                        <table class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Member</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Selly</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Eddy</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Juni</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title mb-4">Category</h5>
                    <div class="row">
                      <div class="col text-center">
                        <i class="icon-face-wash"></i>
                        <p class="mt-2">
                          <a href="" class="text-decoration-none text-black"
                            >Face Wash</a
                          >
                        </p>
                      </div>
                      <div class="col text-center">
                        <i class="icon-moist"></i>
                        <p class="mt-2">
                          <a href="" class="text-decoration-none text-black"
                            >Mostrurizer</a
                          >
                        </p>
                      </div>
                      <div class="col text-center">
                        <i class="icon-body-serum"></i>
                        <p class="mt-2">
                          <a href="" class="text-decoration-none text-black"
                            >Body Serum</a
                          >
                        </p>
                      </div>
                      <div class="col text-center">
                        <i class="icon-collagen"></i>
                        <p class="mt-2">
                          <a href="" class="text-decoration-none text-black"
                            >Collagen</a
                          >
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <img src="<?=base_url('assets/images/foto-produk/CLh 5.png')?>" class="card-img-top" alt=""/>
                  <div class="card-body">
                    <h5
                      class="card-title font-weight-normal"
                      style="margin-bottom: 0.6rem; line-height: 25px"
                    >
                      Collastar Honey - 5 Sachets
                    </h5>
                    <p class="card-text font-weight-medium">Rp.12000</p>
                    <p class="card-text text-warning">Stock 102</p>
                    <p class="card-text text-warning">
                      Stock Partner Kota 1002
                    </p>
                    <a
                      href="../joyway/pages/product/product-detail.html"
                      class="btn btn-primary"
                      style="border-radius: 5px; padding: 10px"
                      >Order</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <img src="<?=base_url('assets/images/foto-produk/travelsize.png')?>" class="card-img-top" alt="" />
                  <div class="card-body">
                    <h5
                      class="card-title font-weight-normal"
                      style="margin-bottom: 0.6rem; line-height: 25px"
                    >
                      Dream Kissed - Travel Size
                    </h5>
                    <p class="card-text font-weight-medium">Rp.12000</p>
                    <p class="card-text text-warning">Stock 102</p>
                    <p class="card-text text-warning">
                      Stock Partner Kota 1002
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="border-radius: 5px; padding: 10px"
                      >Order</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <img src="<?=base_url('assets/images/foto-produk/csat.jpg')?>" class="card-img-top" style="width: 100%" alt="" />
                  <div class="card-body">
                    <h5
                      class="card-title font-weight-normal"
                      style="margin-bottom: 0.6rem; line-height: 25px"
                    >
                      C-Star Bright Stick 25%
                    </h5>
                    <p class="card-text font-weight-medium">Rp.12000</p>
                    <p class="card-text text-warning">Stock 102</p>
                    <p class="card-text text-warning">
                      Stock Partner Kota 1002
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="border-radius: 5px; padding: 10px"
                      >Order</a
                    >
                  </div>
                </div>
              </div>
              <div class="col-lg-3 grid-margin stretch-card">
                <div class="card">
                  <img src="<?=base_url('assets/images/foto-produk/SKS Travel4.png')?>" class="card-img-top" alt=""/>
                  <div class="card-body">
                    <h5
                      class="card-title font-weight-normal"
                      style="margin-bottom: 0.6rem; line-height: 25px"
                    >
                      Snow Kissed - Travel Size
                    </h5>
                    <p class="card-text font-weight-medium">Rp.12000</p>
                    <p class="card-text text-warning">Stock 102</p>
                    <p class="card-text text-warning">
                      Stock Partner Kota 1002
                    </p>
                    <a
                      href="#"
                      class="btn btn-primary"
                      style="border-radius: 5px; padding: 10px"
                      >Order</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright © 2021. Premium <a href="https://www.bootstrapdash.com/" target="_blank" >Bootstrap admin template</a>from BootstrapDash. All rights reserved.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
            </div>
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
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
    <script src="<?=base_url('assets/admin/vendors/js/vendor.bundle.base.js')?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?=base_url('assets/admin/vendors/chart.js/Chart.min.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net/jquery.dataTables.js')?>"></script>
    <script src="<?=base_url('assets/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/dataTables.select.min.js')?>"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?=base_url('assets/admin/js/off-canvas.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/hoverable-collapse.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/template.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/settings.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/todolist.js')?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?=base_url('assets/admin/js/dashboard.js')?>"></script>
    <script src="<?=base_url('assets/admin/js/Chart.roundedBarCharts.js')?>"></script>
    <!-- End custom js for this page-->
  </body>
</html>
