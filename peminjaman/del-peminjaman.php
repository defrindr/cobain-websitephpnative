<?php
  include('config/koneksi.php');
  $id = $_GET['id'];

  $query =  "DELETE from data_pinjam where id_pinjam=$id";
  $delete = mysqli_query($db,$query);

  if($delete)
  {
    header('location:?page=peminjaman/index');
  }else {
    header('location:index.php');
  }
 ?>
