<?php
  include('config/koneksi.php');
  $id = $_POST['idbuku'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $penerbit = $_POST['penerbit'];
  $thnterbit = $_POST['thnterbit'];
  $query="INSERT INTO `dat_buku`(`id_buku`, `nama_buku`, `pengarang`, `penerbit`, `tahun_terbit`) VALUES ($id,'$judul','$pengarang','$penerbit',$thnterbit)";
  $tambah = mysqli_query($db,$query);
  if(!$tambah)
  {
    header('location:index.php');
  }else{
    header('location:?page=buku/index');
  }
?>
