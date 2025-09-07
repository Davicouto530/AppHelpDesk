<?php

    /*
    print_r($_GET);

    echo '<br/>';

    // Aqui seria usado o método GET para pegar os dados do formulário.
    // O $_GET é um array associativo nativo do PHP que guarda os valores enviados pela URL (query string).
    // Exemplo: se a URL fosse "pagina.php?email=teste@gmail.com&senha=123", o $_GET teria esses valores.
    // Por isso, abaixo se acessa $_GET['email'] e $_GET['senha'].

    echo $_GET['email'];  // Mostra o valor enviado no campo de formulário chamado "email"
    echo '<br/>';
    echo $_GET['senha'];  // Mostra o valor enviado no campo de formulário chamado "senha"
    */

    // Agora, em vez do GET, o código está usando o POST:
    print_r($_POST);

    echo '<br/>';

    // O $_POST também é um array associativo nativo do PHP.
    // Ele guarda os valores enviados por um formulário, mas de forma "escondida",
    // sem aparecer na URL (mais seguro que o GET para dados sensíveis).
    // Os valores são acessados pelo atributo "name" dos inputs do formulário.

    echo $_POST['email']; // Mostra o valor digitado no input com name="email"
    echo '<br/>';
    echo $_POST['senha']; // Mostra o valor digitado no input com name="senha"

?>
