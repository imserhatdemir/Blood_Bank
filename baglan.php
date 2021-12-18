<?php 

if(basename($_SERVER['PHP_SELF'])==basename(__FILE__)){
    exit("BU SAYFAYA ERİŞİM YASAK");}
try{
$db = new PDO("mysql:host=localhost; dbname=project_ex;charset=utf8",'root','');




}
catch(PDOExpception $e){

    echo $e->getMessage();
}



?>