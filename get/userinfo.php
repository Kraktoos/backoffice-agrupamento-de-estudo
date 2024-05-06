<?php

if (isset($_SESSION['id'])) {
    $sessao = [
        'id' => 1,
        'primeiro_nome' => "Sr.",
        'ultimo_nome' => "Admin",
        'email' => "admin@admin"
    ];
}

// if (isset($_SESSION['id'])) {
//     $qUtilizador = 'SELECT primeiro_nome, ultimo_nome, email FROM utilizadores WHERE id = "'.$_SESSION['id'].'"';
//     $sessao = my_query($qUtilizador)[0];
// }