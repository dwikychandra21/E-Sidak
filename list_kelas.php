<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1">
    <title>E-Sidak | Aplikasi sidak siswa</title>

  <!-- style -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shorcut icon" href="img/esidak2.png">

  <!-- script -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-custom">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="img/esidak2.png" alt=""></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#h">Home</a></li>
          <li><a href="#r">Riwayat</a></li>
          <li><a href="#b">Blacklist</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#u">Hy, Budi</a></li>
          <li><a href="#k">Logout &nbsp;<i class="fa fa-sign-out"></i></a></li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid">
        <div class="jumbotron-list">
          <h2 class="text-center">Kelas XII</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="box">
        <div class="row">
        <div class="col-md-12 col-sm-12">
          <label for=""><h3>Paket Keahlian :</h3></label>
          <ul class="list-group list-jurusan text-center">
            <li class="list-group-item"><a href="#a">Teknik Gambar Bangunan</a></li>
            <li class="list-group-item"><a href="#b">Teknik Konstruksi Batu Beton</a></li>
            <li class="list-group-item"><a href="#c">Teknik Konstruksi Kayu</a></li>
            <li class="list-group-item"><a href="#d">Teknik Elektronika Komunikasi</a></li>
            <li class="list-group-item"><a href="#e">Teknik Instalasi Pemanfaatan Tenaga Listrik</a></li>
            <li class="list-group-item"><a href="#f">Teknik Pendingin dan Tata Udara</a></li>
            <li class="list-group-item"><a href="#g">Teknik Pemesinan</a></li>
            <li class="list-group-item"><a href="#h">Teknik Sepeda Motor</a></li>
            <li class="list-group-item"><a href="#i">Teknik Kendaraan Ringan</a></li>
            <li class="list-group-item"><a href="#j">Teknik Komputer dan Jaringan</a></li>
            <li class="list-group-item"><a id="openModal">Rekayasa Perangkat Lunak</a> </li>
            <li class="list-group-item"><a href="#l">Multimedia</a></li>
          </ul>

          <div id="myModal" class="modal">
            <div class="modal-content">
              <div class="modal-header">
                <span class="close">&times;</span>
                <p><b>Rekayasa Perangkat Lunak</b></p>
              </div>

              <div class="modal-body">
                <h4><li class="list-group-item text-center"><a href="form_sidak.php">Rekayasa Perangkat Lunak 1</a></li></h4>
                <h4><li class="list-group-item text-center"><a href="form_sidak.php">Rekayasa Perangkat Lunak 2</a></li></h4>
              </div>
            </div><!-- modal-content -->
          </div><!-- modal -->

        </div>
      </div>
      </div>
    </div>

    <footer>
      <p>Copyright &copy; 2017 E-Sidak</p>
    </footer>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
