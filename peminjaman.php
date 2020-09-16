<?php
 include('config/koneksi.php');
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <center><center><h3 class="box-title">Daftar Peminjaman</h3></center>
    </div>
    <div clas="box-body">
      <a class="btn btn-success" style="margin:10px;" href="?page=frm-peminjaman"><i class="fa fa-plus"></i>Tambah Peminjaman</a>
      <table class="table table-responsive table-bordered table-striped">
        <tr>
          <th>Tanggal pinjam</th>
          <th>Tanggal Kembali</th>
          <th>Judul Buku</th>
          <th>peminjam</th>
          <th>Denda</th>
          <th>Aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM data_pinjam p,siswa s,dat_buku b where p.nis=s.nis and p.id_buku=b.id_buku";
        $query = mysqli_query($db, $sql);
        $i=1;
        while($pinjam = mysqli_fetch_array($query))
        {
          echo "<tr>";
          echo "<td>".$pinjam['tgl_pinjam']."</td>";
          echo "<td>".$pinjam['tgl_kembali']."</td>";
          echo "<td>".$pinjam['nama_buku']."</td>";
          echo "<td>".$pinjam['nama']."</td>";
          echo "<td>".$pinjam['denda']."</td>";
          echo " <td>
                  <a href='?page=det-peminjaman&id=".$pinjam['id_pinjam']."'><i class='fa fa-eye'></i></a>
                  <a href='?page=edit-peminjaman&id=".$pinjam['id_pinjam']."'><i class='fa fa-pencil'></i></a>
                  <a href='?page=del-peminjaman&id=".$pinjam['id_pinjam']."'><i class='fa fa-trash'></i></a></td>";
          echo "</tr>";
        }
        ?>
      </table>
    </div>
  </div>
</section>
