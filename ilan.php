<?php 
include "baglan.php";


$mail=$_POST['mail'];
$host=$_POST['hastane'];


$kaydet = $db->prepare("INSERT INTO ilan SET
kan=:kan,
sehir=:sehir,
cinsiyet=:cinsiyet,
hastanead=:hastanead,
mail_ilan=:mail_ilan
");

$insert=$kaydet->execute(array(
'kan'=>$_POST['kg'],
'sehir'=>$_POST['sehir'],
'cinsiyet'=>$_POST['cinsiyet'],
'hastanead'=>$_POST['hastane'],
'mail_ilan'=>$_POST['mail'],
));

if($mail=="" || $host==""){
    echo "<script>alert('Boş alan bırakmayınız')</script>";
    header("location:kanilanı.php");
}
else if ($insert){
    header("location:ilanlar.php");
}else{
    header("location:uyeol.php?durum=no");
}

?>