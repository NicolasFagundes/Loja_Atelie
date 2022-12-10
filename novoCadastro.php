<?php

$login = $_POST['email'];
$entrar = $_POST['cadastrar'];
$senha = $_POST['pass'];
$connect = mysqli_connect('localhost','root', '', 'CADASTRO');
		


			try {
			  $query = "INSERT INTO usuarios2 (login,senha) VALUES ('$login','$senha')";
        $insert = mysqli_query($connect ,$query);

        if($insert){
          echo"<script language='javascript' type='text/javascript'>
          alert('Usuário cadastrado com sucesso!');window.location.
          href='login.html'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível cadastrar esse usuário');window.location
          .href='novoCadastro.html'</script>";
        }
		} catch(Exception $e) {
		  echo "Erro ao cadastrar o usuário, por favor tente novamente";
		}

?>