<?php
  include('../config/koneksi.php');
  if(empty($_POST['username'])){
    echo "<script>alert('isi semua ya :)');</script>";
  }else{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "INSERT INTO user VALUES('','$username','$password')";
    $tambah = mysqli_query($db,$query);
    if($tambah){
      echo "<script>alert('user berhasil ditambahkan');</script>";
    }else{
      echo "<script>alert('Gagal Menambahkan ".$username."');</script>";
    }
  }
 ?>
