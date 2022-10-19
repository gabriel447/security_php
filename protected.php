<?php

if (isset($_SESSION['login'])) {
    $data['info'] = 'Informação exclusiva apenas para usuários logados';
    die(json_encode($data));
} else {
    die("Arquivo protegido! Logue no sistema!");
}
