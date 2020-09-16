<?php
  include('config/koneksi.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM dat_buku where id_buku=$id";
  $query = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($query)) {
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Edit Data Buku</h3></center>
    </div>
    <?php
    echo "
    <form role='form' method='POST' action='?page=proses/updatebuku&id=".$id."'>
      <div clas='box-body' style='padding:10px'>
        <div class='form-group'>
          <label for='idbuku'>ID Buku</label>
          <input type='text' name='idbuku' id='idbuku' class='form-control' placeholder='' value='".$row['id_buku']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='judul'>Nama Buku</label>
          <input type='text' name='judul' id='judul' class='form-control' placeholder='' value='".$row['nama_buku']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='penerbit'>Penerbit</label>
          <input type='text' name='penerbit' id='penerbit' class='form-control' placeholder='' value='".$row['penerbit']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='pengarang'>Pengarang</label>
          <input type='text' name='pengarang' id='pengarang' class='form-control' placeholder='' value='".$row['pengarang']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='thnterbit'>Tahun Terbit</label>
          <input type='text' name='thnterbit' id='thnterbit' class='form-control' placeholder='' value='".$row['tahun_terbit']."' required='required'>
        </div>
      </div>

      ";
      }
      ?>
      <div class="box-footer">
        <button class="btn btn-success" name="simpan" type="submit">Tambahkan</button>
      </div>
    </form>
  </div>
</section>
