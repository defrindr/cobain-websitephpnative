<?php
  include('config/koneksi.php');
  $id=$_GET['id'];
  $tglp=$_POST['tglpinjam'];
  $tglk=$_POST['tglkembali'];
  $denda=$_POST['denda'];
  $nis=$_POST['nis'];
  $idbuku=$_POST['idbuku'];
  echo $id."<br>".$tglp."<br>".$tglk."<br>".$denda."<br>".$nis."<br>".$idbuku;
  $sql = "UPDATE `data_pinjam` SET id_pinjam=$id,`tgl_pinjam`='$tglp',`tgl_kembali`='$tglk',`denda`='$denda',`nis`=$nis,`id_buku`=$idbuku WHERE id_pinjam=$id";

    $query = mysqli_query($db,$sql);
    if($query)
    {
      header('location:?page=peminjaman/index');
    }else{
      header('location:index.php');
    }

?>
