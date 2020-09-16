<?php include('config/koneksi.php');?>
<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Tambah Peminjaman</h3></center>
    </div>
    <form role="form" method="POST" action="?page=proses/addpeminjaman">
      <div clas="box-body" style="padding:10px">
        <div class="form-group">
          <label for="tglpinjam">Tanggal Pinjam</label>
          <div class="input-group date">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="date" name="tglpinjam" id="tglpinjam" class="form-control" placeholder="" required="required">
          </div>
        </div>
        <div class="form-group">
          <label for="tglkembali">Tanggal Kembali</label>
          <input type="date" name="tglkembali" id="tglkembali" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="nis">Nis</label>
          <select name="nis" id="nis" class="form-control" placeholder="" required="required">
            <?php
            $sql = "SELECT * from siswa order by nama";
            $query = mysqli_query($db,$sql);
            while($row=mysqli_fetch_array($query)){
              echo "<option value='".$row['nis']."'>".$row['nama']."</option>";
            }
            ?></select>
        </div>
        <div class="form-group">
          <label for="idbuku">ID Buku</label>
          <select name="idbuku" id="idbuku" class="form-control" placeholder="" required="required">
            <?php
            $sql = "SELECT * from dat_buku order by nama_buku";
            $query = mysqli_query($db,$sql);
            while($row=mysqli_fetch_array($query)){
              echo "<option value='".$row['id_buku']."'>".$row['nama_buku']."</option>";
            }
            ?>
          </select>
        </div>

      </div>
      <div class="box-footer">
        <button class="btn btn-success" name="simpan" type="submit">Tambahkan</button>
      </div>
    </form>
  </div>
</section>
