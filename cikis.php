<?php
session_start();
if(isset($_SESSION['mail']) && !empty($_SESSION['mail'])){
    unset($_SESSION['mail']);
    session_destroy();
    header('Location: index.php');
}else header('Location: index.php');