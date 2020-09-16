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
      <?php if(isset($_SESSION['username'])){ echo "<a class='btn btn-success' href=''?page=anggota/frm-anggota' style='margin:10px'><span class='glyphicon glyphicon-plus'> </a>";} ?>
      <div style="overflow:auto">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Nis</th>
            <th>Nama</th>
            <th>kelas</th>
            <?php if(isset($_SESSION['username'])){
              echo "<th>aksi</th>";
              }
              ?>
          </tr>
          <?php
          $hal = (isset($_GET['hal'])) ? (int)$_GET['hal'] :1;
          $limit = 5; //jumlah data perhalaman
          $limit_start = ($hal -1 ) * $limit;
          $sql = "SELECT * FROM siswa limit $limit_start,$limit";
          $query = $pdo -> prepare($sql);
          $query -> execute();
          $no = $limit_start +1;
          while($anggota = $query -> fetch())
          {
            echo "
            <tr>
              <td>".$anggota['nis']."</td>
              <td>".$anggota['nama']."</td>
              <td>".$anggota['kelas']."</td>
              <td>
                <a href='?page=anggota/det-anggota&id=".$anggota['nis']."'><span class='glyphicon glyphicon-eye-open'> </a>
                <a href='?page=anggota/edit-anggota&id=".$anggota['nis']."'><span class='glyphicon glyphicon-pencil'> </a>
                <a href='?page=anggota/del-anggota&id=".$anggota['nis']."'><span class='glyphicon glyphicon-trash'> </a>
              </td>
              </tr>
              ";
            }
            ?>
          </table>
        </div>

        <center>

                  <ul class="pagination">
                    <!--Link First dan Prev -->
                    <?php
                    if($hal == 1){
                      echo "<li class='disabled'><a href='#'>First</li>";
                      echo "<li class='disabled'><a href='#'>&laquo;</li>";
                    }else{
                      $link_prev = ($hal >1)? $hal - 1 :1;
                      echo "<li><a href='?page=anggota/index&hal=1'>First</a></li>";
                      echo "<li><a href='?page=anggota/index&hal=$link_prev'>&laquo;</a></li>";
                    }
                    ?>

                    <!--Link Number-->

                    <?php
                    $query2 = $pdo ->prepare("select count(*) as jumlah from siswa");
                    $query2->execute();
                    $get_jumlah = $query2 -> fetch();

                    $jumlah_hal = ceil($get_jumlah['jumlah'] / $limit); //hitung jumlah __halt_compiler
                    $jumlah_number = 3; //menentukan jumlah link number sebelum dan sesudah page aktif
                    $start_number = ($hal > $jumlah_number)?$hal-$jumlah_number:1;
                    $end_number = ($hal< ($jumlah_hal - $jumlah_number))?
                      $hal + $jumlah_number:$jumlah_hal;

                    for($i = $start_number; $i <=$end_number;$i++){
                      $link_active = ($hal == $i)?'class="active"':'';
                    ?>
                    <li <?php echo $link_active; ?>><a href="?page=anggota/index&hal=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php
                    }
                    ?>


                    <!-- link next and last-->

                    <?php
                    if($hal == $jumlah_hal){ // disable kan bila hal adalah hal terakhir
                    ?>
                    <li class="disabled"><a href="#">&raquo;</a></li>
                    <li class="disabled"><a href="#">Last</a></li>

                  <?php
                  }else{
                    $link_next =($hal < $jumlah_hal)? $hal+1:$jumlah_hal;
                  ?>

                  <li><a href="?page=anggota/index&hal=<?php echo $link_next; ?>">&raquo;</a></li>
                  <li><a href="?page=anggota/index&hal=<?php echo $jumlah_hal; ?>">Last</a></li>

                  <?php
                  }
                  ?>
                </ul>
      </center>
    </div>
  </div>
</section>
