<?php
  include('config/koneksi.php');
  $id = $_GET['id'];

  $query =  "DELETE from dat_buku where id_buku=$id";
  $delete = mysqli_query($db,$query);

  if($delete)
  {
    header('location:?page=buku/index');
  }else {
    header('location:index.php');
  }
 ?>
