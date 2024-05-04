<?php
include 'fungsi.php';
$hapus = hapus($_GET);
if ($hapus) {
  echo "<script>
      alert('berhasil menghapus data');
      document.location.href='index.php';
      </script>";
} else {
  echo "<script>
      alert('gagal menghapus data');
      document.location.href='index.php';
      </script>";
}