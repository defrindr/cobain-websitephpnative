<?php
  include('config/koneksi.php');
  $id = $_GET['id'];
  $sql = "SELECT  * FROM dat_buku where id_buku = '".$id."'";
  $query = $pdo ->prepare($sql);
  $query ->execute();
  while($row = $query ->fetch()) {
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Detail Buku</h3></center>
    </div>
    <div class="box-body">
        <table class="table table-responsive table-bordered table-striped">
            <th>Nama Buku </th><td><?php echo $row['nama_buku'];?></td>
          </tr>
          <tr>
            <th>Penerbit buku</th><td><?php echo $row['penerbit'];?></td>
          </tr>
          <tr>
            <th>Nama Pengarang</th><td><?php echo $row['pengarang'];?></td>
          </tr>
          <tr>
            <th>Tahun terbit buku</th><td><?php echo $row['tahun_terbit'];?></td>
          </tr>
      </table>
      <?php
        }
      ?>
      </div>
    </div>
  </div>
</section
