<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Harri Portofolio</title>
    <?php require_once 'css.php' ?>
    <style>
      body {
        background-image: url() !important;
      }
      #tentang {
        height: auto !important;
        background-image: url() !important;
      }
      h1 {
        font-size: 150px;
      }
      h2 {
        font-size: 150px;
      }

    </style>
  </head>
  
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#target-list">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">Harri Hidayat</a>
      </div>

      <div class="collapse navbar-collapse" id="target-list">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Beranda</a></li>
          <li><a href="contact.php"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Hubungi Saya</a></li>
        </ul>
      </div>
    </nav>

    <div class="container" id="tentang">
     
      <div class="row" id="tentangawal">
        <div class="col-lg-8 col-md-offset-2 text-center">
          <h1>ERROR !!!</h1>
          <h2>403</h2>
          <h3>Anda tidak memiliki hak akses, <a href="index.php">Kembali Ke Halaman Utama</a></h3>
        </div>
      </div>
      
    </div>

    <?php require_once 'js.php' ?>
  </body>
</html>