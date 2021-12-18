<?php
include ("baglan.php");

if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    exit("BU SAYFAYA ERİŞİM YASAK");}
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Anasayfa
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>


<!-- Responsive navbar-->
<nav class="navbar navbarColor navbar-expand-lg navbar-light">
    <div class="container px-5">
        <a class="navbar-brand" href="anasayfa.php">SH-SAFE HEALTH | <small style="font-size: 14px;"><?=$_SESSION['mail']?></small></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="anasayfa.php">Anasayfa</a></li>
                <li class="nav-item"><a class="nav-link" href="kanbagisi.php">Kan Bağışının Önemi</a></li>
                <li class="nav-item"><a class="nav-link" href="ilanlar.php">Kan İlanları</a></li>
                <li class="nav-item"><a class="nav-link" href="kanilanı.php">Kan İlanı Ver</a></li>
                <li class="nav-item"><a class="nav-link" href="cikis.php">Çıkış Yap</a></li>
                
            </ul>
        </div>
    </div>
</nav>





<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>