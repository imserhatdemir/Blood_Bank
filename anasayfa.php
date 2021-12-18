<?php
include ("baglan.php");
include ("header.php");



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
<?php 
     $mail=$_SESSION['mail'];
     if(!$mail){
         header("location:index.php");
     }
    
    ?>

<!-- Responsive navbar-->


<div class="jumbotron ">

    <div class="container px-4 px-lg-5">
              <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-4 mt-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="images/Ekran%20görüntüsü%202021-11-24%20172412.png" alt="..." /></div>
            <div class="col-lg-5">
            <h1 class="display-4">Kan Bağışının Önemi</h1>
            <p class="lead">Neden kan bağışı yapmalıyız?</p>
            <hr class="my-4">
            <p class="lead">
            <a class="btn btn-dark btn-lg "  href="kanbagisi.php" role="button">Daha fazlası »</a>
            </p>
            </div>
        </div>
    </div>

    <div class="jumbotron clr">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-4 mt-5 mb-5"><img class="img-fluid rounded mb-4 mb-lg-0" src="images/Hakkımızda.png" alt="..." /></div>
            <div class="col-lg-5">

                <h1 class="display-4">Hakkımızda</h1>
                <hr class="my-4">
                <p class="lead">
                    İki genç girişimci başladığımız bu yolda uygulamamız üzerinden bireylerin kan ihtiyaçlarına ulaşması ve bu ihtiyaçları sistematik bir şekilde yerini bulmasını istiyoruz.

                    Tüm bu süreçlerde topluma fayda sağlamak üzere hareket ediyoruz. Bu sağlacağımız fayda ile hasta bireyler ve yakınları kan ve aferaz bağışçısı bulmak için daha az efor sarf edecekler.

                    Unutmayın kan hepimizin ihtiyacı ve ulaşılması en zor sağlık ihtiyacı.
                </p>

            </div>
            </div>
        </div>
    </div>
</div>


<div class="m-backtotop" aria-hidden="true">
<div class="arrow">
    <i class="fa fa-arrow-up"></i>
</div>
<div class="text">
    Back to top
</div>
</div>





<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>