<?php
include 'fungsi.php';
if (isset($_POST['submit'])) {
  $tambah = tambah($_POST);
  if ($tambah) {
    echo "<script>
        alert('berhasil menambahkan data');
        document.location.href='index.php';
        </script>";
  } else {
    echo "<script>
        alert('gagal menambahkan data');
        document.location.href='tambah.php';
        </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Tambah Data Mahasiswa
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
</head>
<body class="">
  <div class="wrapper">
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="index.php">Tambah Data</a>
          </div>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="search-bar input-group">                
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <form action="" method="post">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-4 pr-md-1">
                      <div class="form-group">
                        <label>NPM</label>
                        <input type="text" name="npm" class="form-control" maxlength="10" pattern="[0-9]{10}" autofocus placeholder="isi 10 digit npm anda...">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="isi nama lengkap anda...">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" maxlength="4" pattern="[0-9]{3,4}" placeholder="2022">
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <label>Kelas</label>
                        <select name="kelas" class="form-control">
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-fill btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
            </script> by choirul anwar
          </div>
        </div>
      </footer>
    </div>
  </div>
</body>
</html>