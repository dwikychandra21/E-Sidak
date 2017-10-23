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
          <h2 class="text-center">EDIT SISWA</h2>
      </div>
    </div>


    <div class="container-fluid">
          <div class="col-md-12">

            <div class="container-panel-detail form-content">

              <table class="table table-custom">
              <form action="edit_proses.php" method="post">


              <tbody>
                <tr>
                  <th>NIS</th>
                  <td>: &nbsp;&nbsp;&nbsp;24932</td>
                </tr>

                <tr>
                  <th>Nama</th>
                  <td>: <input type="text" name="nama" class="form-control form-control-custom" value="Hendra Setiawan"></td>
                </tr>

                <tr>
                  <th>Poin</th>
                  <td>: <input type="text" name="nama" class="form-control form-control-custom" value="70"></td>
                </tr>

                <tr>
                  <td><hr></td>
                </tr>

                <tr>
                  <th>Nama Orang Tua</th>
                  <td>: <input type="text" name="nama" class="form-control form-control-custom" value="John Doe"></td>
                </tr>

                <tr>
                  <th>No.Hp</th>
                  <td>: <input type="text" name="nama" class="form-control form-control-custom" value="0857-3757-3551"></td>
                </tr>

                <tr>
                  <th>Alamat</th>
                  <td>: <input type="text" name="nama" class="form-control form-control-custom" value="Jl.Raya Sading"></td>
                </tr>

              </tbody>
              </form>
              </table>
            </div>
      </div>
    </div>
    <div class="container-fluid container-button-update">

        <div class="col-md-12 ">
          <button class="btn btn-cetak" type="button"><i class="fa fa-print"></i> Cetak Laporan</button>
          <button class="btn btn-update" type="button">Update</button>
        </div>

    </div>

    <footer>
      <p>Copyright &copy; 2017 E-Sidak</p>
    </footer>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
