<?php 
include('baglan.php');


session_start();
if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){
    header("Location: anasayfa.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Giriş Yap
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/uyeol-girisyap.css" rel="stylesheet" />
</head>

<body>



        <div class="container__form container--signin">
            <form action="giris.php" class="form" id="form2" method="POST">
                <h2 class="form__title">Giriş Yap</h2>
                <input type="email" placeholder="Email" class="input" name="mail" />
                <input type="password" placeholder="Şifre" class="input" name="pass"/>
                <button class="btn">Giriş Yap</button>
                <button class="btn"><a href="uyeol.php" class="anasayfa">Üye Ol</a></button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>