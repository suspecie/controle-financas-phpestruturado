<?php

/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
include "valida_cookies.php";



/* FUNÇÕES */

function criaform() {
    global $con;

    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();



    $query = "SELECT * FROM tipo_receita_despesa";
    $resultado = mysql_query($query, $con);
    $i = 0;
    while ($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
        $rows[$i] = $row;
        $i = $i + 1;
    }


    $smarty->assign('linha', $rows);
    $smarty->display('cadastro.tpl');
}

/* FIM FUNÇÕES */

/* DESENHA CADASTRO */


if (sizeof($_POST) == 0) {

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($acao == null) {

        criaform();
    }
}


/* FIM DESENHA CADASTRO */
?>