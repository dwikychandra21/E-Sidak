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
    <div class="container-fluid">
      <div class="header-form">
        <img src="img/esidak2.png" alt="">

      </div>
    </div>

    <div class="container-fluid">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="form-content">
	         <div class="label">
		           <h3>Sign In</h3>
		       </div>
          <form action="proses_login.php" method="post">

              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" autofocus><i class="fa fa-user"></i>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password"><i class="fa fa-eye"></i>
              </div>
              <button type="submit" class="btn">Sign In</button>

          </form>

        </div>
      </div>
    </div>


    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>
