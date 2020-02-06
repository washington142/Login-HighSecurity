<?php 

include('src/config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <style>
      body{
        background-image: url("images/wallpaper.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
      }

    </style>

  <div class="form">
    <div id="formContent">
      <br>
      <form method="post" action="src/check.php" id="formlogin" name="formlogin">
        <fieldset id="fie">
          <label>EMAIL:</label><input type="text" id="login" name="login" placeholder="login">

          <label>SENHA:</label><input type="password" id="senha" name="senha" placeholder="password">

          <input type="submit" value="entrar" id="entrar" name="entrar">
        </fieldset>
      </form>

      <div id="formFooter">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodaluser">
          Criar Usuario
        </button>
        <br><br>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mymodal">
          Esqueceu a senha?
        </button>

        <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Recuperar a senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form">
                  <div id="formContent">
                    <form method="post" action="src/recoverpass.php">
                      <label for="email">E-mail:</label>
                      <input type="text" name="email" id="email"  placeholder="E-mail"/>
                      <input type="submit" value="Recuperar" />
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="mymodaluser" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="TituloModalCentralizado">Criar novo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form">
                  <div id="formContent">
                    <form method="post" action="src/newuser.php">
                      <label for="email">E-mail:</label>
                      <input type="text" name="email" id="email"  placeholder="E-mail"/>
                      <label for="email">Senha:</label>
                      <input type="password" name="password" id="password"  placeholder="Senha"/>
                      <input type="submit" value="enviar" id="enviar" name="enviar"/>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

</body>

</html>