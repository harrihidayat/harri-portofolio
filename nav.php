<?php $halamanaktif = basename($_SERVER['PHP_SELF'], ".php"); 
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#target-list">
      <span class="icon-bar top-bar"></span>
      <span class="icon-bar middle-bar"></span>
      <span class="icon-bar bottom-bar"></span>
    </button>
    <a href="index.php" class="navbar-brand">Harri Hidayat</a>
  </div>

  <div class="collapse navbar-collapse" id="target-list">
    <ul class="nav navbar-nav">
      <li class="<?= ($halamanaktif == 'index' OR $halamanaktif == '') ? 'active':''; ?>"><a class="efek" href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Beranda</a></li>
      <li class="<?= ($halamanaktif == 'portofolio') ? 'active':''; ?>"><a class="efek" href="portofolio.php"><i class="fa fa-book" aria-hidden="true"></i> Portofolio</a></li>
      <li class="<?= ($halamanaktif == 'contact') ? 'active':''; ?>"><a class="efek" href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i> Hubungi Saya</a></li>
    </ul>
  </div>
</nav>