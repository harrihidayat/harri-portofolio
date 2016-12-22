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
        background-image: url('img/bgfoot.jpg') !important;
      }
    </style>
  </head>

  <body>

    <?php require_once 'nav.php' ?>

    <div class="container" id="portofolio">

      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center kemampuanawal">
          <h2>Portofolio Saya</h2>
          <h3>Beberapa hal yang telah saya kerjakan.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="col-md-12 text-center">
            <ul class="nav nav-pills center-pills marginbot2em">
              <li class="active"><a class="teksbold" data-toggle="pill" href="#home">Semua</a></li>
              <li><a class="teksbold" data-toggle="pill" href="#menu1">Website</a></li>
              <li><a class="teksbold" data-toggle="pill" href="#menu2">Desain</a></li>
            </ul>
          </div>

            <div class="tab-content">
              <div id="home" class="tab-pane fade in active">
                <div class="row">
                  <?php include 'portofolio-content/pcweb.php' ?>
                  <?php include 'portofolio-content/pcdesain_special.php' ?>
                </div>
              </div>
              <div id="menu1" class="tab-pane fade">
                <div class="row">
                  <?php include 'portofolio-content/pcweb.php' ?>
                </div>
              </div>
              <div id="menu2" class="tab-pane fade">
                <div class="row">
                  <?php include 'portofolio-content/pcdesain_special.php' ?>
                </div>
              </div>
            </div>
        </div>
      </div>


    </div>

    <div class="container" id="temuisaya">

      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center kemampuanawal">
          <h2>Temui Saya Lewat Dunia Maya</h2>
        </div>
      </div>

      <div class="row">
          <div class="col-md-4 col-md-offset-2 text-center">
          <img  src="img/linkedin.png" alt="Generic placeholder image">
          <h2>LinkedIn</h2>
          <br>
          <a id="tomboltemui" class="btn btn-default" href="https://www.linkedin.com/in/harri-hidayat-a783b1a8" target="_blank" role="button">Terhubung Dengan Saya</a>
          </div>

          <div class="col-md-4 text-center">
          <img  src="img/github.png" alt="Generic placeholder image">
          <h2>GitHub</h2>
          <br>
          <a id="tomboltemui2" class="btn btn-default" href="https://github.com/harrihidayat/" target="_blank" role="button">Ikuti Saya</a>
          </div>
      </div>

    </div>

    <?php require_once 'js.php' ?>
  </body>
</html>
