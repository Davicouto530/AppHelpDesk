<?php

    session_start();

    /*
    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    // Remover indices do array de sessão
    // unset()

    unset($_SESSION['x']); // para remover o indice se existir

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';

    // Destruir a variável de sessão
    // session_destroy()

    session_destroy(); // será destruída 
    // forçar um redirecionamento

    echo '<pre>';
        print_r($_SESSION);
    echo '</pre>';
    */

    session_destroy();
    header('Location: index.php');
?>