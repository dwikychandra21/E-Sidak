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
        <a class="navbar-brand" href="index.php"><img src="img/esidak2.png" alt=""></a>
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
          <h2 class="text-center">RIWAYAT</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="box frame-cari2">
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="cari"><i class="fa fa-filter"></i> Filter</label>
              <select class="form-control select-custom" id="cari">
                <option value="">Pilih...</option>
                <option value="">Januari</option>
                <option value="">Februari</option>
                <option value="">Maret</option>
                <option value="">April</option>
                <option value="">Mei</option>
                <option value="">June</option>
                <option value="">Juli</option>
                <option value="">Agustus</option>
                <option value="">September</option>
                <option value="">Oktober</option>
                <option value="">November</option>
                <option value="">Desember</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
          <div class="col-md-12">

            <div class="container-panel">
              <a href="detail_riwayat.php">
              <table class="table table-custom">
              <tbody>
                <tr>
                  <td><h2>Hendra Setiawan</h2></td>
                </tr>
                <tr>
                <td><h4>29932 &nbsp;•&nbsp; 17 September 2017</h4></td>
                </tr>
              </tbody>
              </table>
              </a>
            </div>



            <div class="container-panel">
              <a href="#">
              <table class="table table-custom">
              <tbody>
                <tr>
                  <td><h2>I Ketut Budi Astawa</h2></td>
                </tr>
                <tr>
                <td><h4>29932 &nbsp;•&nbsp; 17 September 2017</h4></td>
                </tr>
              </tbody>
              </table>
              </a>
            </div>



            <div class="container-panel">
              <a href="#">
              <table class="table table-custom">
              <tbody>
                <tr>
                  <td><h2>Dwiky Chandra Hidayat</h2></td>
                </tr>
                <tr>
                <td><h4>29932 &nbsp;•&nbsp; 17 September 2017</h4></td>
                </tr>
              </tbody>
              </table>
              </a>
            </div>

      </div>
    </div>

    <footer>
      <p>Copyright &copy; 2017 E-Sidak</p>
    </footer>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
