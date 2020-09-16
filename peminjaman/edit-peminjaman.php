<?php
  include('config/koneksi.php');
  $id = $_GET['id'];
  $sql = "SELECT * FROM data_pinjam p,dat_buku b,siswa s where p.nis=s.nis and p.id_buku=b.id_buku and id_pinjam=$id";
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
    <form role='form' method='POST' action='?page=proses/updatepeminjaman&id=".$id."'>
      <div clas='box-body' style='padding:10px'>
        <div class='form-group'>
          <label for='tglpinjam'>Tanggal Pinjam</label>
          <input type='date' name='tglpinjam' id='tglpinjam' class='form-control' placeholder='' value='".$row['tgl_pinjam']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='tglkembali'>Tanggal Kembali</label>
          <input type='date' name='tglkembali' id='tglkembali' class='form-control' placeholder='' value='".$row['tgl_kembali']."' required='required'>
        </div>
        <div class='form-group'>
          <label for='denda'>Denda</label>
          <input type='text' name='denda' id='denda' class='form-control' placeholder='' value='".$row['denda']."'>
        </div>
        <div class='form-group'>
          <label for='nis'>Nis</label>
          <select name='nis' id='nis' class='form-control' placeholder='' required='required'>
            <option selected value='".$row['nis']."'>".$row['nama']."</option>
            ";
            $sqls = "select * from siswa order by nama";
            $querys = mysqli_query($db,$sqls);
            while($rows = mysqli_fetch_array($querys)){
              echo "
                <option value='".$rows['nis']."'>".$rows['nama']."</option>
              ";}
            echo "
          </select>
        </div>
        <div class='form-group'>
          <label for='idbuku'>ID Buku</label>
          <select name='idbuku' id='idbuku' class='form-control' placeholder='' required='required'>
              <option selected value='".$row['id_buku']."'>".$row['nama_buku']."</option>
              ";
              $sqlb = "select * from dat_buku order by nama_buku";
              $queryb = mysqli_query($db,$sqlb);
              while($rowb = mysqli_fetch_array($queryb)){
                echo "
                  <option value='".$rowb['id_buku']."'>".$rowb['nama_buku']."</option>
                ";}
          echo"
          </select>
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
