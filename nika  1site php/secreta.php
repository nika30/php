<?php // secreta.php
session_start();
session_name('secreta');
if($_SESSION['validacao']=='aba'){
include 'menu.php';
}else{
echo " Acesso negado!!!";
}
?>