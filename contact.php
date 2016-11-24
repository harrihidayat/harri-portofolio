<!DOCTYPE html>

<?php

if (isset($_POST['kirim'])) {

  $nama     = $_POST['nama'];
  $email    = $_POST['email'];
  $subjek   = $_POST['subjek'];
  $pesan    = $_POST['pesan'];
  $to       = 'harri.hidayat95@gmail.com';
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers  .= "From: [Web Portofolio Pribadi] Email: [$email] Nama: [$nama]\n";

  // die($email .'<br>'. $subject .'<br>'. $pesan);

  if (mail($to, $subjek, $pesan, $headers)) {
    header("Location: contact.php?success");
  } else {
    header("Location: contact.php?failure");
  }

}


?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Harri Portofolio</title>
    <?php require_once 'css.php' ?>
    <style>
      
      #awal {
        background-image: url() !important;
        height: auto !important;
        padding-bottom: 40px;
      }
      #formisian {
        padding-bottom: 40px;
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
          <li><a class="efek" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
          <li class="active"><a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Saya</a></li>
        </ul>
      </div>
    </nav>

    <div class="container" id="awal">

      <div class="starter-template">
        <div class="col-md-8 col-md-offset-2 text-center">
          <img class="img-circle" src="img/self.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Hubungi Saya</h2>
          <h3>Terima kasih sudah mengunjungi website saya, jika ada pertanyaan dan hal lainnya, silahkan menghubungi saya dengan mengisi beberapa form di bawah.</h3>
          <br>
        </div>
      </div>

    </div>

    <div class="container" id="formisian">
      
      <form action="" method="post">
        

        
        <?php
        if(isset($_GET['success']))
        {
        ?>
        
        <div class="col-md-12">
          <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sukses!</strong> Pesan Kamu Telah Terkirim.
          </div>
        </div>

        <?php
        }
        else if(isset($_GET['failure']))
        {
        ?>
        
        <div class="col-md-12">
          <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Maaf Terjadi Kesalahan!</strong> Coba Ulangi Kembali.
          </div>
        </div>

        <?php
        }
        ?>

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama*" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email*" required>
          </div>
          <div class="form-group">
            <input type="text" name="subjek" class="form-control" placeholder="Subjek" required>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <textarea id="isiemail" name="pesan" cols="30" rows="6" placeholder="Isi Pesan*" required></textarea>
          </div>
        </div>

        <div class="col-md-12">
          <button type="submit" name="kirim" class="btn btn-default tombollebarkeepradius texttebal">Kirim</button>
        </div>
      </form>

    </div>

    <?php require_once 'js.php' ?>
  </body>
</html>