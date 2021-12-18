<?php 
include("baglan.php");


ob_start();
session_start();


$mail = $_POST['mail'];
$pass = $_POST['pass'];

$usersor=$db->prepare("select * from uye where mail=:mail and sifre=:sifre");
$usersor->execute(array(
    'mail'=>$mail, 'sifre'=>$pass 
));
$say=$usersor->rowCount();
if($say==1){
    echo $_SESSION['mail']=$mail;
    header("location:anasayfa.php");
}
else if($mail=="" || $pass==""){
    echo "<script>alert('Boş alan bırakmayınız')</script>"; 
   

}
else{
    echo "<script>alert('Hatalı Giriş')</script>";
    
}




?>