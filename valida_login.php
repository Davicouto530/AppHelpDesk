<?php

    session_start();

    // Variável que verifica se a autenticação foi realizada
    $usuario_atenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

    $perfis = [1 => 'Administrativo', 2 => 'Usuário'];

    // Usuários do sistema
    // Array que irá armazenar os usuários cadastrados
    $usuarios_app = [
        ['id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1],
        ['id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2],
        ['id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2]
    ];

    /*
    echo '<pre>';
        print_r($usuarios_app);
    echo '</pre>';
    */

    // Percorrendo o array que armazena os usuários
    foreach ($usuarios_app as $user) {

        // Verificando se tem algum dos dados que está sendo colocado no formulário dentro do array
        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_atenticado = true;
            // Se as verificações forem "true", a variável muda para "true"

            $usuario_id = $user['id'];

            $usuario_perfil_id = $user['perfil_id'];
        }
    }

    if($usuario_atenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['id'] = $usuario_id;
        $_SESSION['perfil_id'] = $usuario_perfil_id;
        header('Location: home.php');
    }else {
        $_SESSION['autenticado'] = 'NAO';

        // Se der false, vai exibir uma mensagem de erro na página do formulário de login
        // O "Location" serve para forçar o redirecionamento para uma página, e o que ta depois do "?", vai para url
        header('Location: index.php?login=erro');
    }

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
    // print_r($_POST);

    // echo '<br/>';

    // O $_POST também é um array associativo nativo do PHP.
    // Ele guarda os valores enviados por um formulário, mas de forma "escondida",
    // sem aparecer na URL (mais seguro que o GET para dados sensíveis).
    // Os valores são acessados pelo atributo "name" dos inputs do formulário.

    /*
    echo $_POST['email']; // Mostra o valor digitado no input com name="email"
    echo '<br/>';
    echo $_POST['senha']; // Mostra o valor digitado no input com name="senha"
    */
