<section class="content-header">
  <marquee behavior="alternate"><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></marquee>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <Center><h3 class="box-title">Tambah Anggota</h3></center>
    </div>
    <form role="form" method="POST" action="?page=proses/addanggota">
      <div clas="box-body" style="padding:10px">
        <div class="form-group">
          <label for="nis">NIS</label>
          <input type="text" name="nis" id="nis" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="nama">NAMA</label>
          <input type="text" name="nama" id="nama" class="form-control" placeholder="" required="required">
        </div>
        <div class="form-group">
          <label for="kelas">KELAS</label>
          <select name="kelas" id="kelas" class="form-control custom-select-sm" required="required">
            <option value="X RPL A">X RPL A</option>
            <option value="X RPL B">X RPL B</option>
            <option value="X RPL C">X RPL C</option>
            <option value="XI RPL A">XI RPL A</option>
            <option value="XI RPL B">XI RPL B</option>
            <option value="XI RPL C">XI RPL C</option>
            <option value="XII RPL A">XII RPL A</option>
            <option value="XII RPL B">XII RPL B</option>
            <option value="XII RPL C">XII RPL C</option>
          </select>
        </div>
      </div>
      <div class="box-footer">
        <button class="btn btn-success" name="simpan" type="submit">Tambahkan</button>
      </div>
    </form>
  </div>
</section>
