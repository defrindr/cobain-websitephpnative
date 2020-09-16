<?php
  include('config/koneksi.php');
  $id = $_GET['id'];

  $query =  "DELETE from buku where id_pinjam=$id";
  $delete = mysqli_query($db,$query);

  if($delete)
  {
    header('location:?page=buku');
  }else {
    header('location:index.php');
  }
 ?>
