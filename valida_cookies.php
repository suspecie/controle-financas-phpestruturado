<?php

/* CONEXAO BANCO DE DADOS */
include "conexao.php";
global $con;
?>

<?php

if (isset($_COOKIE['usuario'])) {
    $usuario = $_COOKIE['usuario'];
}


if (isset($_COOKIE['senha'])) {
    $senha = $_COOKIE['senha'];
}

//se o usuario existir faz set do usuario e senha no cookie, senao mostra erro.
if (!(empty($usuario) OR empty($senha))) {

    //busca usuario e senha cadastrado no banco
    $query = "SELECT * FROM usuario WHERE login ='$usuario' AND senha = '$senha' ";
    $resultado = mysql_query($query, $con);
    $linha = mysql_fetch_assoc($resultado);

    if (sizeof($linha) == 0) {
        setcookie("usuario", $usuario);
        setcookie("senha", $senha);
        echo 'Você não efetuou o login!';
        exit;
    }
} else {
    echo 'Você não efetuou o login!';
    exit;
}



?>
