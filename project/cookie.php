<?php
if (isset($_POST['identifiant'])){
setcookie("nom",$_POST['identifiant'],time()+36*24*3600,'/','',true,true);
header('location:index.php');
}
?>