<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Tambah Buku</h3></center>
    </div>
    <form role="form" method="POST" action="?page=proses/addbuku">
      <div clas="box-body" style="padding:10px">
        <div class="form-group">
          <label for="idbuku">ID BUKU</label>
          <input type="text" name="idbuku" id="idbuku" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" name="judul" id="judul" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" name="penerbit" id="penerbit" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="pengarang">Pengarang</label>
          <input type="text" name="pengarang" id="pengarang" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="thnterbit">Tahun Terbit</label>
          <input type="text" name="thnterbit" id="thnterbit" class="form-control" placeholder="" required="required">
        </div>

      </div>
      <div class="box-footer">
        <button class="btn btn-success" name="simpan" type="submit">Tambahkan</button>
      </div>
    </form>
  </div>
</section>
