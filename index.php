<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=devweb', 'root', '');
    //modo de desenvolvimento
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //modo de produção não precisa
} catch (Exception $e) {
    //echo $e->getMessage();
    echo 'Não foi possível conectar! Tente novamente mais tarde!';
}
