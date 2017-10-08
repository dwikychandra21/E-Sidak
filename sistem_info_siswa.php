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
          <li><a href="home.php">Home</a></li>
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
          <h2 class="text-center">SISTEM INFORMASI SISWA</h2>
      </div>
    </div>


    <div class="container-fluid">
      <div class="box frame-cari2">
        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="cari">Kelas</label>
            <select class="form-control select-custom" id="cari">
              <option>Pilih...</option>
              <option>Atribut</option>
              <option>Pakaian</option>
              <option>Pakaian</option>
              <option>Pakaian</option>
            </select>
          </div>
        </div>

        <div class="col-md-8">
          <div class="input-group">
            <input type="text" class="form-control" name="cari" placeholder="Cari Nama...">
            <span class="input-group-btn">
              <button class="btn btn-warning" type="button">
                <span class="glyphicon glyphicon-search"></span>
              </button>
            </span>
            </div>
          </div>

        </div> <!--ROW-->
      </div> <!--BOX-->
    </div> <!--container-fluid-->

    <div class="container-fluid">
      <div class="box">
        <div class="row">
        <div class="col-md-12 col-sm-12 table-siswa">
          <label><h3>Rekayasa Perangkat Lunak</h3></label>
          <table class="table table-striped ">
            <thead>
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Poin</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>100</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>2</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>3</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>4</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>5</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>6</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>7</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>8</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr id="blacklist">
                <td>9</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>
              </tr>

              <tr>
                <td>10</td>
                <td>24938</td>
                <td>Dwiky Chandra Hidayat</td>
                <td>80</td>
                <td id="checkbox"><input type="checkbox" value=""></td>

              </tr>
            </tbody>
          </table>
          <button class="btn btn-custom cetak"type="button">Cetak</button>
          <button class="btn btn-custom kirim" type="button">Kirim</button>
        </div>
      </div>
      </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
