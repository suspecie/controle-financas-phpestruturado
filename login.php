<?php

/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
global $con;


/**
 * Pega o usuario e senha preenchidos no form do index
 */
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];



//busca usuario e senha cadastrado no banco
$query = "SELECT * FROM usuario WHERE login ='$usuario' AND senha = '$senha' ";
$resultado = mysql_query($query, $con);
$linha = mysql_fetch_assoc($resultado);



//se o usuario existir faz set do usuario e senha no cookie, senao mostra erro.
if (!empty($linha)) {
    setcookie("login", $usuario);
    setcookie("senha", $senha);
    $smarty = new Smarty();
    $smarty->display('home.tpl');
} else {
    header("Location: /index.php?erro=login");
}
?>