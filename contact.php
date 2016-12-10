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
    <?php require_once 'js.php' ?>
    <style>
      #formisian {
        padding-bottom: 40px;
      }
    </style>
  </head>
  
  <body>

    <?php require_once 'nav.php' ?>

    

      <div class="starter-template">
        <div class="col-md-8 col-md-offset-2 text-center">
          <img class="img-circle" src="img/self.jpg" alt="Generic placeholder image" width="140" height="140">
          <h2>Hubungi Saya</h2>
          <h3>Terima kasih sudah mengunjungi website saya, jika ada pertanyaan dan hal lainnya, silahkan menghubungi saya dengan mengisi beberapa form di bawah.</h3>
          <br>
        </div>
      </div>

    

    <div class="container" id="formisian">
      
      <form action="" method="post">
        

        
        <?php
        if(isset($_GET['success']))
        {
        ?>
        
        <script>
          swal(
            'Sukses!',
            'Pesan Kamu Telah Terkirim!',
            'success'
          );
        </script>

        <?php
        }
        else if(isset($_GET['failure']))
        {
        ?>
        
        <script>
          swal(
            'Oops...',
            'Terjadi Kesalahan, Coba Ulangi Kembali!',
            'error'
          );
        </script>

        <?php
        }
        ?>

        <div class="col-md-6">
          <div class="form-group">
            <input type="text" name="nama" class="form-control" placeholder="Nama (Dibutuhkan)" required>
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email (Dibutuhkan)" required>
          </div>
          <div class="form-group">
            <input type="text" name="subjek" class="form-control" placeholder="Subjek">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <textarea id="isiemail" name="pesan" cols="30" rows="6" placeholder="Isi Pesan (Dibutuhkan)" required></textarea>
          </div>
        </div>

        <div class="col-md-12">
          <button type="submit" name="kirim" class="btn btn-default tombollebarkeepradius texttebal">Kirim</button>
        </div>
      </form>

    </div>
    
    
    
  </body>
</html>