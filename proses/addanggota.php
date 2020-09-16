<?php
  include('config/koneksi.php');
  $nis = $_POST['nis'];
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $query="INSERT INTO siswa VALUES($nis,'$nama','$kelas')";
  $tambah = mysqli_query($db,$query);
    if(!$tambah)
    {
      header('location:index.php');
    }else{
      header('location:?page=anggota/index');
    }

?>
