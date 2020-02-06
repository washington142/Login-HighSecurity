<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title></title>
</head>
</html>
<?php 
session_start();
include('config.php');
include('loadingpage.php');
$entrar = $_POST['entrar'];
$login = $_POST['login'];
$senha = md5($_POST['senha']);
$usuario_escape = addslashes($login);
$senha_escape = addslashes($senha);

  if (isset($entrar)) {

    if($login =="" || $senha == "") {
			echo "<script> alert('Preencha todos os campos!'); </script>";
			header( "refresh:1;url=../login.php" );
		}
           
    $verifica = mysqli_query($connect,"SELECT * FROM coord WHERE email = 
    '{$usuario_escape}' AND senha_coord = '{$senha_escape}'") or die("erro ao selecionar");
    
      if (mysqli_num_rows($verifica)<=0){
        echo '<div class="alert alert-danger">Login ou Senha Incorretos.</div>';
        header( "refresh:1;url=../login.php" );
        die();

      }else{

        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;
        setcookie("login",$login);

       header('Location: ../home.php');
      }
  }
?>

