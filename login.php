<?php

$login = $_POST['email'];
$entrar = $_POST['entrar'];
$senha = $_POST['pass'];
$connect = mysqli_connect('localhost','root', '');
$db = mysqli_select_db($connect,'CADASTRO');
  if (isset($entrar)) {

    $verifica = mysqli_query($connect,"SELECT * FROM usuarios2 WHERE login =
      '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:produtos.html");
  };
}
?>