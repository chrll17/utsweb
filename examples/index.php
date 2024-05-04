<?php
include 'fungsi.php';
$mhs = query();
if(isset($_POST['submit'])){
  $mhs=cari($_POST['cari']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Home
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
            <a class="navbar-brand" href="index.php">Daftar Mahasiswa</a>
          </div>
          <form action="" method="post">
            <ul class="navbar-nav ml-auto">
              <div class="col-md-15 pr-md-1">
                <div class="form-group">
                  <input type="text" name="cari" class="form-control" autofocus placeholder="cari...">
                </div>
              </div>
              <button type="submit" name="submit" class="form-group" ><i class="tim-icons icon-zoom-split"></i></button>
            </ul>
          </form>
        </div>
      </nav>      
      <!-- End Navbar -->
      <div class="content">
      <a href="tambah.php"  >Tambah Data</a>
        <div class="row">
          <div class="col-md-8">
            <div class="card">              
              <div class="card-body">                
                <table class="table tablesorter " id="">
                  <thead class=" text-primary">
                    <tr>
                      <th>
                        No
                      </th>
                      <th>
                        NPM
                      </th>
                      <th>
                        Nama
                      </th>
                      <th>
                        Kelas
                      </th>
                      <th>
                        Opsi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($mhs as $m) {
                    ?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $m['npm'] ?></td>
                      <td><?= $m['nama'] ?></td>
                      <td><?= $m['angkatan'] ?> - <?= $m['kelas'] ?></td>
                      <td><a href="ubah.php?id=<?=$m['id']?>" class="tim-icons icon-pencil"> </a>  ||  <a href="hapus.php?id=<?=$m['id']?>" onclick="return confirm('ingin menghapus data ini?')" class="tim-icons icon-simple-remove"></td>
                    </tr>                      
                    <?php } ?>
                  </tbody>
                </table>                
              </div>
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