<?php 
include "baglan.php";



$kaydet = $db->prepare("INSERT INTO uye SET
ad=:ad,
soyad=:soyad,
dt=:dt,
mail=:mail,
sifre=:sifre,
kangrubu=:kangrubu
");

$insert=$kaydet->execute(array(
'ad'=>$_POST['ad'],
'soyad'=>$_POST['soyad'],
'dt'=>$_POST['date'],
'mail'=>$_POST['mail'],
'sifre'=>$_POST['pass'],
'kangrubu'=>$_POST['kg']
));

if($insert){
    header("location:index.php?durum=ok");
}else{
    header("location:uyeol.php?durum=no");
}

?>