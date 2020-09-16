<?php
  include('config/koneksi.php');
  $id=$_GET['id'];
  $nama=$_POST['judul'];
  $idbuku=$_POST['idbuku'];
  $penerbit=$_POST['penerbit'];
  $pengarang=$_POST['pengarang'];
  $thn=$_POST['thnterbit'];
  $sql = "UPDATE `dat_buku` SET `id_buku`=$idbuku,`nama_buku`='$nama',`pengarang`='$pengarang',`penerbit`='$penerbit',`tahun_terbit`=$thn WHERE id_buku=$id";

    $query = mysqli_query($db,$sql);
    if($query)
    {
      header('location:?page=buku/index');
    }else{
      header('location:index.php');
    }

?>
