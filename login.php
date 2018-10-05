<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="assets/style/stylelogin.css">
  </head>
  <body>
      <h1>Cadastre-se e ganhe descontos promocionais!*</h1>

      <?php
      session_start();
      if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        try {
          $pdo = new PDO("mysql:dbname=teste1;host=127.0.0.1", "root","");
          $sql = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

          if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['id'] = $dado['id'];
            $_SESSION['nome'] = $dado['nome'];

              header("Location: index.php");
            } else {
              echo "nao deu";
            }
          } catch(PDOException $e){
          echo "Falhou ".$e->getMessage();
        }
      }
      ?>
    <div class="login">
      <h2>Entrar</h2>
      <form method="POST" class="login">
      	<!--<label for="email">E-mail: </label>-->
      	<input type="email" name="email" placeholder="E-mail"><br/><br/>
      	<!--<label for="senha">Senha: </label>-->
      	<input type="password" name="senha" placeholder="Senha"><br/><br/>

      	<input type="submit" value="Entrar"/>
      </form>
    </div>
  </body>
</html>
