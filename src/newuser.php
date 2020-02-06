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

include('config.php');

$submit = $_POST['enviar'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($submit)) {  

    $salt = md5("NtaCriptografandopora");
   
    $codifica = crypt($password,$salt);
   
    // SEGUNDA ENCRIPTAÇÃO COM sha512 (128 bits)
    $codifica = hash('sha512',$codifica);

    
    $result_hash = "INSERT INTO AdmUser(email,senha) VALUES ('$email','$codifica')";
    $resultadofinal = mysqli_query($connect, $result_hash);

    header( "refresh:5;url=../login.php" );
   
}
  

/*if(mysqli_affected_rows($connect) > 0 || $nome_usuario =="" || $email_usuario == "" || $cpf_usuario == "" ) {
    header( "refresh:1;url=../cadastro.php" );
    echo '<div class="alert alert-danger">Usuario não Cadastrado. </div>';

} else {

if (mysqli_affected_rows($connect) != 0 || $nome_usuario !="" || $email_usuario != "" || $cpf_usuario != "") {

       header( "refresh:1;url=../cadastro.php" );
       echo '<div class="alert alert-success">Usuario Cadastrado com Sucesso. </div>'; 
       $result_usuario = "INSERT INTO aluno(nome, email,cpf,horastotal) VALUES ('$nome_usuario','$email_usuario','$cpf_usuario','0')";
       $resultado_usuario = mysqli_query($connect, $result_usuario);
           
 }
 */
