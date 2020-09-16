<?php
  include('config/koneksi.php');
  $id = $_GET['id'];

  $query =  "DELETE from siswa where nis=$id";
  $delete = mysqli_query($db,$query);

  if($delete)
  {
    header('location:?page=anggota/index');
  }else {
    header('location:index.php');
  }
 ?>
