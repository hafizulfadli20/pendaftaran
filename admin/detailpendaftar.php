<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Aplikasi pendaftaran Siswa SMKN DARUL ULUM MUNCAR.">
  <meta name="author" content="e-development.tech">

  <title>Aplikasi Pendaftaran Siswa</title>

  <!-- gambar title -->
  <link rel="icon" type="image/png" href="../assets/img/logo.png">

  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- css datepicker -->
  <link href="../assets/vendor/datepicker/css/bootstrap-datepicker.css" rel="stylesheet">

  <style>
    .logo-login {
        max-height: 160px;
        margin-bottom: 20px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">APS - Sistem</div>
      </a>

      <!-- Heading -->
      <div class="sidebar-heading">
        Admin
      </div>

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="pendaftaran.php">
          <i class="fas fa-fw fa-list"></i>
          <span>Data Pendaftaran</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="laporan.php">
          <i class="fas fa-fw fa-list"></i>
          <span>Laporan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <li class="nav-item">
        <a class="nav-link" href="">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">EDI SISWANTO</span>
                <img class="img-profile rounded-circle" src="../assets/img/avatar.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Edit Profil
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Detail Pendaftar</h1>
          
          <div class="row">
            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="col-auto mt-3 text-center">
                      <img src="../assets/img/avatar.jpg" class="img-fluid rounded-circle" alt="menunggu" style="width: 200px;">
                    </div>
                    <br>
                    <h5 class="card-title mb-3 text-center">
                      EDI SISWANTO
                    </h5>
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                        <small class="text-muted">Banyuwangi, 02 Nopember 1997</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                        <small class="text-muted">Laki-Laki</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Agama</h6>
                        <small class="text-muted">Islam</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Alamat</h6>
                        <small class="text-muted">Sumber beras, Muncar - Banyuwangi</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Email</h6>
                        <small class="text-muted">est23.edi@gmail.com</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Telepon</h6>
                        <small class="text-muted">082302002407</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">DATA NILAI PENDAFTAR</h6>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="alert alert-info">
                        Data pendaftar belum divalidasi
                    </div>
                    <br>
                    
                    <ul class="list-group">
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Nasional</h6>
                        <small class="text-muted">90</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Ujian Sekolah</h6>
                        <small class="text-muted">80</small>
                      </li>
                      <li class="list-group-item">
                        <h6 class="mb-0" style="color: black;">Nilai Rata-rata</h6>
                        <small class="text-muted">85</small>
                      </li>
                    </ul>

                    <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">
                        Validasi Data Pendaftar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Penilaian data pendaftar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-center">
                                <a href="" class="btn btn-success mr-3">LOLOS</a>

                                <a href="" class="btn btn-danger">TIDAK LOLOS</a>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Aplikasi Pendaftaran Siswa SMKN Darul Ulum - 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin logout ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Anda akan keluar dari Aplikasi.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- js datepicker -->
  <script src="../assets/vendor/datepicker/js/bootstrap-datepicker.min.js"></script>

  <script type="text/javascript">
    $(function(){
        $(".datepicker").datepicker({
            format: 'dd-mm-yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
  </script>

</body>

</html>