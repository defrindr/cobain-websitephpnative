<?php
  include('config/koneksi.php');
  $id = $_GET['id'];
  $sql = "SELECT  * FROM siswa where nis=$id";
  $query = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($query)) {
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Detail Anggota</h3></center>
    </div>
    <div class="box-body">
        <table class="table table-responsive table-bordered table-striped">
          <tr>
            <th>Nama Siswa </th><td><?php echo $row['nama'];?></td>
          </tr>
          <tr>
            <th>Kelas </th><td><?php echo $row['kelas'];?></td>
          </tr>

          <tr>
            <th>Sekolah </th><td>SMKN 1 Jenangan</td>
          </tr>

      </table>
      <?php
        }
      ?>
      </div>
    </div>
  </div>
</section
