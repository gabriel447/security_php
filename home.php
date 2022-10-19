<?php

//se voce tentar acessar essa pagina na url ele vai pro else

if (isset($logado)) {
    echo 'voce esta dentro meu chapa!';
    session_start();
    $_SESSION['login'] = true;
    include('protected.php');
} else {
    echo 'algo de errado não está certo!';
}
