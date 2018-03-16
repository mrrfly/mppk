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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="font-awesome.min.css" rel="stylesheet" type="text/css">
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
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">My Dashboard</li>
                </ol>
                <!-- Icon Cards-->
                <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="gambar1.png" alt="Mendaftar" width="239" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Data Pendaftar</h5>
                            <p class="card-text">Anda Ingin tahu siapa saja yang sudah mendaftar MPPK dari tahun ke tahun? Untuk calon MPPK atau sudah menjadi anggota MPPK Yuk Lihat!</p>
                            <hr>
                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#modaldaftar">Lihat Disini &#33;</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Update Terakhir Ya Ketika Sama Kamu</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="gambar2.jpg" alt="Card image cap" width="239" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Data Angkatan</h5>
                            <p class="card-text">Kumpulan data-data dari para Anggota MPPK per angkatan, dimulai dari angkatan 18. Jangan bilang lu mau cari nomor gebetan lu disini &#63;</p>
                            <hr>
                            <button class="btn btn-block btn-success" data-toggle="modal" data-target="#modalangkatan">Cek Yuk &#33;</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Update Terakhir Ya Ketika Sama Kamu</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="gambar4.jpg" alt="Card image cap" width="239" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Data Kepengurusan</h5>
                            <p class="card-text">Berbagai macam data dan susunan Kepengurusan yang dimiliki MPPK. Yang mau jadi calon pengurus ya coba aja liat, kali aja mau</p>
                            <hr>
                            <button class="btn btn-block btn-dark" data-toggle="modal" data-target="#modalkepengurusan">Liat aja dah &#33;</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Update Terakhir Ya Ketika Sama Kamu</small>
                        </div>
                    </div>
                    <div class="card">
                        <img class="card-img-top" src="gambar5.jpg" alt="Card image cap" width="239" height="200">
                        <div class="card-body">
                            <h5 class="card-title">Penilaian</h5>
                            <p class="card-text">Data berbagai macam informasi penilaian MPPK. gw juga kgk tau gmn sistem penilainnya makanya gw asal tulis dah, tapi kayaknya sih emg kgk guna bgt dah.</p>
                            <hr>
                            <button class="btn btn-block btn-danger" data-toggle="modal" data-target="#modalpenilaian">Simak &#33;</button>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Update Terakhir Ya Ketika Sama Kamu</small>
                        </div>
                    </div>
                </div>
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

            <!-- Modal Pendaftar -->
            <div class="modal fade" id="modaldaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Pendaftar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body">

                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#daftar" aria-expanded="false" aria-controls="collapseExample">
    Pilih Tahun
  </button>
                            <div class="collapse" id="daftar">
                                <div class="card card-body">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2018</kbd></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2019</kbd></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2020</kbd></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Angkatan -->
            <div class="modal fade" id="modalangkatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Data Angkatan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body">
                           <ul class="list-inline">
                               <li class="list-inline-item">
                                   <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#angkatan" aria-expanded="false" aria-controls="collapseExample">
                                    Pilih Angkatan
                                  </button>
                               </li>
                               <li class="list-inline-item">
                                   <a href="list.php" class="btn btn-success">Tambah Data</a>
                               </li>
                           </ul>

                            <div class="collapse" id="angkatan">
                                <div class="card card-body">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2018</kbd></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2019</kbd></a></li>
                                        <li class="list-inline-item"><a href="#" target="_blank"><kbd class="lead">2020</kbd></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal Kepengurusan -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Penilainan -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <script src="jquery.min.js"></script>
            <script src="bootstrap.bundle.min.js"></script>
            <script src="jquery.easing.min.js"></script>
            <script src="sb-admin.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        </div>
    </body>

    </html>