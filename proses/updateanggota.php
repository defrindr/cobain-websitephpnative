<?php
  include('config/koneksi.php');
  $id=$_GET['id'];
  $idu=$_POST['nis'];
  $nama=$_POST['nama'];
  $kelas=$_POST['kelas'];

  $sql = "UPDATE siswa set nis=$idu,nama='$nama',kelas='$kelas' where nis=$id";
  $query = mysqli_query($db,$sql);

  if($query)
  {
    header('location:?page=anggota/index');
  }else{
    header('location:index.php');
  }
  ?>
