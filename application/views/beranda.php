<!DOCTYPE html>
<html>
<head>
<title>Beranda</title>
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>
<body>
<nav>
        <div class ='menu-mobile'>
            <a href="">Menu</a>
        </div>
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/profil">PROFILE</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/form"> FORM</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/about"> GALLERY</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact"> CONTACT</a></li>
            <li><a href="<?=base_url()?>index.php/welcome/inven">MY INVENTORY</a></li>
        </ul>
</nav>

<section class="sec1">
    <div class ="middle">
    <h2 align="center" style="font-family: Prime;">Selamat datang di website
    <?= $nama_lengkap ?> jenis Kelamin <?= $jenkel ?> </h2>
    </div>
</section>
<section class="content">
   <p>Halo selamat datang di web ku </p>
</section>

</body>
</html>