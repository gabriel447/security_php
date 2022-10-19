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
