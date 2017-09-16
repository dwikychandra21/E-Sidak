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
      <div class="box frame-cari">
        <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="cari">Cari</label>
            <select class="form-control select-custom" id="cari">
              <option>NIS</option>
              <option>NAMA</option>
            </select>
          </div>
        </div>

        <div class="col-md-8">
          <div class="input-group">
            <input type="text" class="form-control" name="cari">
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
        <div class="jumbotron-home">
          <h2 class="text-center">Kelas yang ingin disidak ?</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="box">
        <div class="row frame-pilih-kelas">
        <div class="col-md-4">
          <div class="list-kelas">
            <h3>X</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="list-kelas">
            <h3>XI</h3>
          </div>
        </div>
        <div class="col-md-4">
          <div class="list-kelas">
            <h3>XII</h3>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
