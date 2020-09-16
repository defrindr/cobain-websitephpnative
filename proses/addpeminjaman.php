<?php
  include('config/koneksi.php');
  $tglp = $_POST['tglpinjam'];
  $tglk = $_POST['tglkembali'];
  $nis = $_POST['nis'];
  $idbuku = $_POST['idbuku'];



  $date_awal = date_create($_POST['tglpinjam']);
  $date_akhir = date_create($_POST['tglkembali']);
  $selisih = date_diff($date_awal,$date_akhir);
  $jml_hari = $selisih ->format('%a');

  if($jml_hari < 7){
    $denda=0;
  }else{
    $denda=($jml_hari - 7) * 1000;
  }

  $query = "INSERT INTO `data_pinjam`(`id_pinjam`, `tgl_pinjam`, `tgl_kembali`, `denda`, `nis`, `id_buku`) VALUES ('','$tglp','$tglk','$denda',$nis,$idbuku)";

  $tambah = mysqli_query($db,$query);
  if($tambah)
  {
    header('location:?page=peminjaman/index');
  }else{
    header('location:index.php');
  }

?>
