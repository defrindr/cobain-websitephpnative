<section class="content-header">
  <center><h1><i>PERPUS</i><small>SMKN1JENPO</small><h1></center>
</section>
<section class="content">
  <div class="box box-info">
    <div class="box-header with-border">
      <marquee behavior="alternate"><h3 class="box-title">Hai <?php if (isset($_SESSION['username'])){ echo $_SESSION['username']; }?> , Selamat datang</h3></marquee>
    </div>
    <div clas="box-body">
      <table class="table table-bordered table-striped">
        <tr>
          <th>NO</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Jumlah Pinjam</th>
        </tr>
      </table>
    </div>
  </div>
</section>
