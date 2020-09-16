<?php
 include('config/koneksi.php');
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <center><center><h3 class="box-title">Daftar Anggota</h3></center>
    </div>
    <div clas="box-body">
      <a class="btn btn-success" href="?page=frm-anggota" style="margin:10px"><i class="fa fa-plus"></i> Tambah Anggota</a>
      <table class="table table-bordered table-striped">
        <tr>
          <th>Nis</th>
          <th>Nama</th>
          <th>kelas</th>
          <th>aksi</th>
        </tr>
        <?php
        $sql = "SELECT * FROM siswa order by nis";
        $query = mysqli_query($db, $sql);
        while($anggota = mysqli_fetch_array($query))
        {
          echo "
          <tr>
            <td>".$anggota['nis']."</td>
            <td>".$anggota['nama']."</td>
            <td>".$anggota['kelas']."</td>
            <td>
              <a href='?page=det-anggota&id=".$anggota['nis']."'><i class='fa fa-eye'></i></a>
              <a href='?page=edit-anggota&id=".$anggota['nis']."'><i class='fa fa-pencil'></i></a>
              <a href='?page=del-anggota&id=".$anggota['nis']."'><i class='fa fa-trash'></i></a>
            </td>
          </tr>
          ";
          $i++;
        }
        ?>
      </table>

    </div>
  </div>
</section>
