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
          <li class="active"><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
          <li><a class="efek" href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Saya</a></li>
        </ul>
      </div>
    </nav>

    <div class="container" id="awal">

      <div class="starter-template">
        <div class="col-md-8 col-md-offset-2 text-center">
          <img class="img-circle" src="img/self.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Harri Hidayat</h2>
          <h3>Seorang web developer pemula dan penyuka teknologi seputar IT!</h3>
          <br>
          <a id="tombolawal" class="btn btn-default" href="contact.php" role="button">Hubungi</a>
        </div>
      </div>

    </div>

    <div class="container" id="tentang">
     
      <div class="row" id="tentangawal">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2>Tentang Saya</h2>
          <h3>Beberapa fakta singkat tentang diri saya.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-3 text-center tentangdetail">
          <i class="fa fa-map-marker fa-5x" aria-hidden="true"></i>
          <h2>Tempat Tinggal</h2>
          <p class="tentangparagraf">Saya bertempat tinggal di Sei Mencirim, Deli Serdang. Tepatnya di alamat Dusun IV Jl. Pala Gg. Mawar 2</p>
        </div><!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-3 text-center tentangdetail">
          <i class="fa fa-code fa-5x" aria-hidden="true"></i>
          <h2>Koding</h2>
          <p class="tentangparagraf">Saya ngoding untuk membuat website dengan menggunakan html, css, php, mysql, bootstrap, dan yang lainnya.</p>
        </div><!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-3 text-center tentangdetail">
          <i class="fa fa-headphones fa-5x" aria-hidden="true"></i>
          <h2>Musik</h2>
          <p class="tentangparagraf">Saya suka mendengan musik disaat tertentu, musik yang saya suka ialah musik dari film yang pernah saya tonton.</p>
        </div><!-- /.col-md-4 -->
        <div class="col-sm-6 col-md-3 text-center tentangdetail">
          <i class="fa fa-gamepad fa-5x" aria-hidden="true"></i>
          <h2>Gaming</h2>
          <p class="tentangparagraf">Saya seorang gamer PC dengan sebuah PC rakitan sendiri. Tipe game yang saya senangi ialah RPG, FPS, dan sedikit Simulasi.</p>
        </div><!-- /.col-md-4 -->
      </div><!-- /.row -->
      
    </div>

    <div class="container pemotong">
    </div>

    <div class="container" id="kemampuan">
     
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center kemampuanawal">
          <h2>Kemampuan Saya</h2>
          <h3>Beberapa kemampuan yang saya miliki.</h3>
        </div>
      </div>
      
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><h3>Koding Website</h3></h3>
          </div>
          <div class="panel-body">
            <div class="col-md-1">
              <h4>HTML</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                Amatir
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>CSS</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                Amatir
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>Bootstrap</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>PHP</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                Amatir
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>Laravel</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>CodeIgniter</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>MySQL</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                Amatir
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>Javascript</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>Jquery</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><h3>Version Control System</h3></h3>
          </div>
          <div class="panel-body">
            <div class="col-md-1">
              <h4>Git</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

            <div class="col-md-1">
              <h4>Github</h4>
            </div>
            <div class="col-md-11 kemampuanprogress">
              <div class="progress">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                Pemula
                </div>
              </div>
            </div>

          </div>
        </div>
        </div>
      </div>
      
    </div>

    <div class="container pemotong">
    </div>

    <div class="container" id="portofolio">
     
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center kemampuanawal">
          <h2>Portofolio Saya</h2>
          <h3>Beberapa hal yang telah saya kerjakan.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-6 col-md-5 col-md-offset-1">
          <div class="thumbnail">
            <img src="img/portofolio/phpro.jpg" alt="">
            <div class="caption">
            <h3>PHPRO</h3>
            <p class="portofolioparagraf">PHPRO merupakan sebuah situs pembelajaran pemrograman php, ini merupakan karya saya untuk tugas skripsi saya, untuk frontendnya masih memakai sebuah template.</p>
            <a href="http://www.phpro.hol.es" target="_blank" class="btn btn-success btn-lg tombollebar">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-5">
          <div class="thumbnail">
            <img src="img/portofolio/zerostudio.jpg" alt="">
            <div class="caption">
            <h3>Zero Studio</h3>
            <p class="portofolioparagraf">zero studio merupakan website yang saya bangun untuk tim yang dulu pernah saya ikuti, website ini berfungsi sebagai pengenal studio tersebut, untuk fontendnya masih memakai sebuah template.</p>
            <a href="http://www.zerostudio.hol.es" target="_blank" class="btn btn-success btn-lg tombollebar">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-5 col-md-offset-1">
          <div class="thumbnail">
            <img src="img/portofolio/pribadi.jpg" alt="">
            <div class="caption">
            <h3>Website Pribadi</h3>
            <p class="portofolioparagraf">harri-portofolio merupakan website yang saya bangun untuk mengenalkan diri saya dan mempresentasikan hasil karya yang telah saya buat.</p>
            <a href="http://www.harri-portofolio.pe.hu" target="_blank" class="btn btn-success btn-lg tombollebar">Lihat</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-5">
          <div class="thumbnail">
            <img src="img/portofolio/segera.jpg" alt="">
            <div class="caption">
            <h3>Segera...</h3>
            <p class="portofolioparagraf">Segera...</p>
            <a href="#!" class="btn btn-success btn-lg disabled tombollebar">Segera</a>
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
          <h2>Github</h2>
          <br>
          <a id="tomboltemui" class="btn btn-default" href="https://github.com/harrihidayat/" target="_blank" role="button">Ikuti Saya</a>
          </div>
      </div>

    </div>

    <?php require_once 'js.php' ?>
  </body>
</html>