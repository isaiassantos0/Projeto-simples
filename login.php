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
<form method="POST">
	E-mail:<br/>
	<input type="email" name="email"><br/><br/>
	Senha:<br/>
	<input type="password" name="senha"><br/><br/>

	<input type="submit" value="Entrar"/>
</form>
