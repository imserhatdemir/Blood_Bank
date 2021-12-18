<?php 
include('baglan.php');


session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title> Üye ol
    </title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/uyeol-girisyap.css" rel="stylesheet" />
</head>
<body>



<div class="container__form container--signin">
    <form action="ilan.php" class="form" id="form2" method="POST">
        <h2 class="form__title">Kan İlanı Ver</h2>



        Gereken Kan Grubun: <select name="kg" required>
    <option value="">------</option>
    <option >A Rh+</option>
    <option >A Rh-</option>
    <option >B Rh+</option>
    <option >B Rh-</option>
    <option >AB Rh+</option>
    <option >AB Rh-</option>
    <option >0 Rh+</option>
    <option >0 Rh-</option>
    </select>

    Şehir:<select name="sehir" required>
    <option  value="">------</option>
    <option >Adana</option>
    <option >Adıyaman</option>
    <option >Afyonkarahisar</option>
    <option >Ağrı</option>
    <option >Amasya</option>
    <option >Ankara</option>
    <option>Antalya</option>
    <option>Artvin</option>
    <option >Aydın</option>
    <option >Balıkesir</option>
    <option >Bilecik</option>
    <option >Bingöl</option>
    <option >Bitlis</option>
    <option >Bolu</option>
    <option >Burdur</option>
    <option>Bursa</option>
    <option >Çanakkale</option>
    <option >Çankırı</option>
    <option >Çorum</option>
    <option >Denizli</option>
    <option >Diyarbakır</option>
    <option >Edirne</option>
    <option >Elazığ</option>
    <option >Erzincan</option>
    <option >Erzurum</option>
    <option >Eskişehir</option>
    <option >Gaziantep</option>
    <option >Giresun</option>
    <option >Gümüşhane</option>
    <option >Hakkâri</option>
    <option >Hatay</option>
    <option >Isparta</option>
    <option >Mersin</option>
    <option >İstanbul</option>
    <option >İzmir</option>
    <option >Kars</option>
    <option >Kastamonu</option>
    <option >Kayseri</option>
    <option >Kırklareli</option>
    <option >Kırşehir</option>
    <option >Kocaeli</option>
    <option >Konya</option>
    <option >Kütahya</option>
    <option >Malatya</option>
    <option >Manisa</option>
    <option >Kahramanmaraş</option>
    <option >Mardin</option>
    <option >Muğla</option>
    <option >Muş</option>
    <option >Nevşehir</option>
    <option >Niğde</option>
    <option >Ordu</option>
    <option >Rize</option>
    <option >Sakarya</option>
    <option >Samsun</option>
    <option >Siirt</option>
    <option >Sinop</option>
    <option >Sivas</option>
    <option >Tekirdağ</option>
    <option >Tokat</option>
    <option >Trabzon</option>
    <option >Tunceli</option>
    <option >Şanlıurfa</option>
    <option >Uşak</option>
    <option >Van</option>
    <option >Yozgat</option>
    <option >Zonguldak</option>
    <option >Aksaray</option>
    <option >Bayburt</option>
    <option >Karaman</option>
    <option >Kırıkkale</option>
    <option >Batman</option>
    <option >Şırnak</option>
    <option >Bartın</option>
    <option >Ardahan</option>
    <option >Iğdır</option>
    <option >Yalova</option>
    <option >Karabük</option>
    <option >Kilis</option>
    <option >Osmaniye</option>
    <option >Düzce</option>
</select>
    
    Cinsiyet:<select name="cinsiyet" required>
    <option  value="">------</option>
        <option>Kadın</option>
        <option>Erkek</option>
    </select>
    <input type="text" placeholder="Hastane Adı" class="input" name="hastane" required/>
    <input type="email" placeholder="Mail" class="input" name="mail" required/>

        <button class="btn">İlanı Ver</button>
        <button class="btn"><a href="anasayfa.php" class="anasayfa">Anasayfaya dön</a></button>

    </form>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>