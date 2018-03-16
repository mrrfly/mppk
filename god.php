<?php
 session_start();
 if(!isset($_SESSION['username'])) {
  header("Location: login.php?access_denied");
 }

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Panel MPPK">
        <meta name="Admin" content="Panel MPPK">
        <title>MPPK ADMIN</title>
        <link rel="icon" href="kampak.png">
        <!-- Bootstrap core CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Custom fonts for this template-->
        <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- Page level plugin CSS-->
        <!-- Custom styles for this template-->
        <link href="sb-admin.css" rel="stylesheet">
    </head>

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <a class="navbar-brand" href="index.php">Selamat Datang &nbsp;<kbd class="text-uppercase"><?php echo $_SESSION['username']; ?>!</kbd></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
                    </li>

                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Peralatan Canggih</span>
          </a>
                        <ul class="sidenav-second-level collapse" id="collapseMulti">
                            <li>
                                <a href="list.php"><i class="fa fa-fw fa-users"></i>&nbsp;Registrasi</a>
                            </li>
                            <li>
                                <a href="god.php"><i class="fa fa-fw fa-unlock"></i>Add GOD</a>
                            </li>
                            <li>
                                <a href="#">Maintenance Bro &#33;</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
                <ul class="navbar-nav sidenav-toggler bg-success">
                    <li class="nav-item">
                        <a class="nav-link text-center text-white" id="sidenavToggler">
                            <i class="fa fa-fw fa-angle-left text-white"></i>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
                            </div>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-block btn-danger text-white rounded border border-white" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">ADD God</li>
                </ol>
                <!-- Primary -->
                <center>
                <form action="reg.php" method="post">
                <div class="text-center mb-4">
                    <img class="mb-4" src="gambar3.jpg" alt="logo" width="80" height="80">
                    <h1 class="h3 mb-3 font-weight-normal">Pendaftaran Dewa</h1>
                </div>
                
                <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control col-md-5" placeholder="ID Unik" name="id" required autofocus>
                </div>

                <div class="form-label-group">
                    <input type="text" id="inputEmail" class="form-control col-md-5" placeholder="Username" name="username" required autofocus>
                </div>

                <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control col-md-5" placeholder="Kata Sandi" name="password" required>
                </div>
<br>
                <button class="btn btn-lg btn-primary btn-block col-md-5" type="submit">Jadikan Dewa&#33;</button>
                <p class="mt-5 mb-3 text-muted text-center">&copy; Copyright MPPK</p>
            </form>
            </center>
            </div>
            <!-- /.container-fluid-->
            <!-- /.content-wrapper-->
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small class="font-weight-bold">Copyright © MPPK 2018</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
            <!-- Logout Modal-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Siap Kerja &#63;</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
                        </div>
                        <div class="modal-body">Anda Yakin Ingin Keluar&#63; Apa tugas anda sudah selesai&#63;</div>
                        <div class="modal-footer">
                            <button class="btn btn-dark" type="button" data-dismiss="modal">Batal</button>
                            <a href="logoff.php" class="btn btn-danger">KELUAR</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Core plugin JavaScript-->
            <script src="jquery.easing.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="sb-admin.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        </div>
    </body>

    </html>