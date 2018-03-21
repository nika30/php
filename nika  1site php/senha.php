<?php // senha.php
$login = $_POST['login'];
$senha = $_POST['senha'];
if($login=='admin' && $senha=='admin'){
  session_start();
  session_name('secreta');
  $_SESSION['validacao']='aba';
  $_SESSION['login']=$login;
  header("Location:menu.php");
}else{
echo " login ou senha errados!!!";
}
?>