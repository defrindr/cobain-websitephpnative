<?php
  include('config/koneksi.php');
  $id = $_GET['id'];
  $sql = "SELECT  * FROM data_pinjam p,dat_buku b,siswa s where p.nis=s.nis and p.id_buku=b.id_buku and id_pinjam=$id";
  $query = mysqli_query($db, $sql);
  while($row = mysqli_fetch_array($query)) {
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Detail Peminjaman</h3></center>
    </div>
    <div class="box-body">
        <table class="table table-responsive table-bordered table-striped">
          <tr>
            <th>Nama Peminjam </th><td><?php echo $row['nama'];?></td>
          </tr>
          <tr>
            <th>Kelas </th><td><?php echo $row['kelas'];?></td>
          </tr>
          <tr>
            <th>Nama Buku Yang Di Pinjam </th><td><?php echo $row['nama_buku'];?></td>
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
          <tr>
            <th>Tanggal Pinjam</th><td><?php echo $row['tgl_pinjam']; ?></td>
          </tr>
          <tr>
            <th>Tanggal Kembali</th><td><?php echo $row['tgl_kembali']; ?></td>
          </tr>
          <tr>
            <th>Lama Pinjam</th><td>
              <?php
                $date_awal = date_create($row['tgl_pinjam']);
                $date_akhir = date_create($row['tgl_kembali']);
                $selisih = date_diff($date_awal,$date_akhir);

                echo $selisih ->format('%a hari');
                ?></td>
          </tr>
          <tr>
            <th>Denda</th><td><?php echo $row['denda'];?></td>
          </tr>

      </table>
      <?php
        }
      ?>
      </div>
    </div>
  </div>
</section
