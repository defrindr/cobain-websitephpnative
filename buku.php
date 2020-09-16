<?php
 include('config/koneksi.php');
?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <center><center><h3 class="box-title">Daftar Buku</h3></center>
    </div>
    <div clas="box-body">
      <a class="btn btn-success" style="margin:10px;" href="?page=frm-buku"><i class="fa fa-plus"></i>Tambah Buku</a>
      <table class="table table-bordered table-dark table-hover">
        <tr>
          <th>Id Buku</th>
          <th>Nama Buku</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Aksiku</th>
        </tr>
        <?php
          $perPage=10;

          if (isset($_GET['hal'])) {
            $page = $_GET['hal'];
          }else {
            $page = 1;
          }

          if ($page > 1) {
            $mulai = ($page * $perPage) - $perPage;
          }else {
            $mulai = 0;
          }
          $sql = "SELECT * FROM dat_buku limit $mulai, $perPage";
          $query = mysqli_query($db, $sql);
          $i=1;
          while($buku = mysqli_fetch_array($query))
          {
            echo "<tr>";
            echo "<td>".$buku['id_buku']."</td>";
            echo "<td>".$buku['nama_buku']."</td>";
            echo "<td>".$buku['pengarang']."</td>";
            echo "<td>".$buku['penerbit']."</td>";
            echo "<td>".$buku['tahun_terbit']."</td>";
            echo "<td>
            <div class='tooltip'>
              <a href='?page=det-buku&id=".$buku['id_buku']."'><i class='fa fa-eye'></i></a>
              <span class='tooltiptext'>anu</span>
              </div>
              <a href='?page=edit-buku&id=".$buku['id_buku']."'><i class='fa fa-pencil'></i></a>
              <a href='?page=del-buku&id=".$buku['id_buku']."'><i class='fa fa-trash'></i></a></td>";
              echo "</tr>";
            }
            ?>
      </table>
      <?php
        $query = mysqli_query($db,"select * from dat_buku");
        $jmlbuku = mysqli_num_rows($query);
        echo $jmlbuku;
        echo "<br>";
        echo $halaman = ceil($jmlbuku/$perPage);
        for ($i=1; $i <= $halaman ; $i++) {
            echo "<a href='?page=buku&hal=".$i."'>".$i."</a>";
        }
      ?>
    </div>
  </div>
</section>
