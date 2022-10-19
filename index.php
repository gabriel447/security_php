<?php

//você precisa envolvar o pdo com try/cath para não vazar a senha do banco

try {
    $pdo = new PDO('mysql:host=localhost;dbname=devweb', 'root', '');
    //modo de desenvolvimento (inserir linha abaixo para debug)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    //echo $e->getMessage();
    echo 'Não foi possível conectar! Tente novamente mais tarde!';
}

if (isset($_POST['login'])) {

    //voce pode também colocar strip_tags pra tirar tags e deixar a requisição mais segura.

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //um dos erros é colocar a variavel na query como abaixo
    //$sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE login = '$login' AND senha = '$senha'");

    //aqui é o modo certo contra SQL injection
    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE login = ? AND senha = ?");
    $sql->execute(array($login, $senha));
    if ($sql->rowCount() == 1) {
        echo 'Logado!';
    } else {
        echo 'falhou o login!';
    }
}

?>

<form method="post">
    <input type="text" name="login">
    <input type="password" name="senha">
    <input type="submit" name="acao" value="Enviar!">
</form>

<!-- comando do sql injection no formulario -->
<!-- ' OR 1 = 1; /"  -->