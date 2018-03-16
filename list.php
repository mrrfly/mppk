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
                        <a href="index.php">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Registrasi</li>
                </ol>

                <h1>Registrasi</h1>
                <hr>

                <form action="daftar.php" method="post">

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="inputEmail4">NISN <span class="text-danger">&#42;</span></label>
                            <input type="number" class="form-control" placeholder="Masukkan NISN" name="no" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Nama <span class="text-danger">&#42;</span></label>
                            <input type="text" name="namaL" class="form-control" placeholder="Masukkan Nama Lengkap" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Kelas dan Jurusan <span class="text-danger">&#42;</span></label>
                            <input type="text" name="kelas" class="form-control" placeholder="Contoh: XI-RPL1" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Angkatan<span class="text-danger">&#42;</span></label>
                            <select class="custom-select" name="angkatan" required>
                  <option selected>=- Pilih Angkatan -=</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                </select>
                                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label>Tempat Lahir <span class="text-danger">&#42;</span></label>
                            <input type="text" class="form-control" placeholder="Lahir Dimana Lu?" name="tempatL" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label>Tanggal Lahir <span class="text-danger">&#42;</span></label>
                            <small><i>Bulan/Tanggal/Tahun</i></small>
                            <input type="date" name="tanggalL" class="form-control" placeholder="Tanggal Brojol Lu" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Jenis Kelamin<span class="text-danger">&#42;</span></label>
                            <select class="custom-select" name="jenisK" required>
                  <option selected>=- Pilih Kelamin -=</option>
                  <option value="pria">Pria</option>
                  <option value="wanita">Wanita</option>
                  <option disabled class="text-danger">Jangan Kelainan dah</option>
                </select>
                                        </div>
                    </div>

                    <div class="form-row">
                       
                       <div class="form-group col-md-2">
                            <label>Agama <span class="text-danger">&#42;</span></label>
                            <input type="text" class="form-control" placeholder="Yakin Punya Agama?" name="agama" required>
                        </div>
                       
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputPassword4">Telephone atau Handphone</label>
                            <input type="number" name="telp" class="form-control" placeholder="Masukin Nomor">
                        </div>
                        <div class="form-group col-md-3">
                            <label>Golongan Darah</label>
                            <select class="custom-select" name="goldar">
                  <option selected>=- Pilih Goldar -=</option>
                  <option value="a">A</option>
                  <option value="b">B</option>
                  <option value="ab">AB</option>
                  <option value="o">O</option>
                </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputAddress">Alamat <span class="text-danger">&#42;</span></label>
                        <textarea name="alamat" class="form-control" placeholder="Punya Rumah Gak?" required></textarea>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEmail4">Motivasi <span class="text-danger">&#42;</span></label>
                            <input type="text" class="form-control" placeholder="Yaelah kek punya motivasi aja lu" name="motivasi" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Prestasi Akademik</label>
                            <input type="text" name="presak" class="form-control" placeholder="Orang kek lu punya prestasi gini mustahil">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Prestasi Non-Akademik</label>
                            <input type="text" name="presnonak" class="form-control" placeholder="Jangan kebanyakan Ngayal">
                        </div>
                    </div>
        
                    <div class="form-group">
                        <div class="custom-control custom-checkbox form-check">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                            <label class="custom-control-label" for="customCheck1">Klik ini jika data sudah benar.<span class="text-danger">&#42;</span></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">Sentuh &#33;</button>
                </form><br>

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
            <script src="jquery.min.js"></script>
            <script src="bootstrap.bundle.min.js"></script>
            <script src="jquery.easing.min.js"></script>
            <script src="sb-admin.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        </div>
    </body>

    </html>