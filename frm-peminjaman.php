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
          <input type="text" name="tglpinjam" id="tglpinjam" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="tglkembali">Tanggal Kembali</label>
          <input type="text" name="tglkembali" id="tglkembali" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="denda">Denda</label>
          <input type="text" name="denda" id="denda" class="form-control" placeholder="">
        </div>
        <div class="form-group">
          <label for="nis">Nis</label>
          <input type="text" name="nis" id="nis" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="idbuku">ID Buku</label>
          <input type="text" name="idbuku" id="idbuku" class="form-control" placeholder="" required="required">
        </div>

      </div>
      <div class="box-footer">
        <button class="btn btn-success" name="simpan" type="submit">Tambahkan</button>
      </div>
    </form>
  </div>
</section>
