<?php

/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
include "valida_cookies.php";
$_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;
$_SESSION['modo'] = NULL;


/* FUNÇÕES */

/**
 * 
 * @global type $con
 * @param type $idDescricao
 */
function criaform($idDescricao = NULL) {
    global $con;

    //session
    $_SESSION['modo'] = 'cadastro';


    //carregando os tipos de receita e despesa
    $query_tipo = "SELECT * FROM tipo_receita_despesa";
    $resultado_tipo = mysqli_query($con, $query_tipo);
    $i = 0;
    while ($row = mysqli_fetch_array($resultado_tipo, MYSQL_ASSOC)) {
        $rows[$i] = $row;
        $i = $i + 1;
    }


    //carregando os meses
    $mes[1] = 'JANEIRO';
    $mes[2] = 'FEVEREIRO';
    $mes[3] = 'MARCO';
    $mes[4] = 'ABRIL';
    $mes[5] = 'MAIO';
    $mes[6] = 'JUNHO';
    $mes[7] = 'JULHO';
    $mes[8] = 'AGOSTO';
    $mes[9] = 'SETEMBRO';
    $mes[10] = 'OUTUBRO';
    $mes[11] = 'NOVEMBRO';
    $mes[12] = 'DEZEMBRO';




    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('mes', $mes);
    $smarty->assign('linha', $rows);
    $smarty->assign('idDescricao', $idDescricao);
    $smarty->display('cadastro.tpl');
}

function mostraGrid() {
    global $con;

    $total_reg = "3"; //numero de registro por pagina
    $pagina = $_SESSION['pagina'];


    if (!$pagina) {
        $pc = "1";
    } else {
        $pc = $pagina;
    }

    $inicio = $pc - 1;
    $inicio = $inicio * $total_reg;


    //busca os registros para a lista    
    $query = "SELECT rd.*, des.descricao AS descricao, tipo.descricao AS tipo FROM receita_despesa rd
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)  LIMIT $inicio,$total_reg";
    $resultado = mysqli_query($con, $query);

    $i = 0;
    $receitasdespesas = NULL;
    while ($linha = mysqli_fetch_object($resultado)) {
        $receitasdespesas[$i] = $linha;
        $i = $i + 1;
    }

    //total de registros na tabela
    $query_total = "SELECT count(*) as total from receita_despesa";
    $resultado_total = mysqli_query($con, $query_total);

    $linha_total = mysqli_fetch_object($resultado_total);
    $total_registros = $linha_total->total;



    //chama a paginacao
    $paginador = navegacao($pc, $total_registros);



    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('receitasdespesas', $receitasdespesas);
    $smarty->assign('paginador', $paginador);
    $smarty->display('listacadastro.tpl');
}

/**
 * PAGINACAO
 * @param type $pagina
 * @param type $total
 */
function navegacao($pagina = 1, $total = 0) {

    //maximo de registros por tela
    $total_reg = 3;
    //calcula quantas telas
    $maxpaginas = intval($total / $total_reg);

    //adiciona mais uma tela em caso de divisao com quebra
    $temmod = $total % $total_reg;


    if ($temmod) {
        $maxpaginas = $maxpaginas + 1;
        // decide primeira
    }

    if ($pagina == 1) {
        $link_primeiro = " << ";
    } else {
        $link_primeiro = "<a href='?pagina=1'><<</a>";
    }

    //decide anterior 
    if ($pagina == 1) {
        $link_anterior = " < ";
    } else {
        $anterior = $pagina - 1;
        $link_anterior = "<a href='?pagina=" . $anterior . "'><</a>";
    }

    // decide proxima
    if ($maxpaginas == $pagina) {
        $link_posterior = " > ";
    } else {
        $link_posterior = "<a href='?pagina=" . ($pagina + 1) . "'> > </a>";
    }

    //decide ultima
    if ($maxpaginas == $pagina) {
        $link_ultimo = " >> ";
    } else {
        $link_ultimo = "<a href='?pagina=" . $maxpaginas . "'>>></a>";
    }

    $label_total = ' Total de Registros: ' . $total;

    $paginador = "<br>" . $link_primeiro . "  |  " . $link_anterior . " | " . $link_posterior . " | " . $link_ultimo . " " . $label_total;

    return $paginador;
}

/**
 * 
 * @global type $con
 * @param type $texto
 * @param type $retorno
 */
function criaFormBuscades($texto = NULL, $retorno = NULL) {
    global $con;

    $linha = null;
    $resultado = null;

    if ($texto != null) {
        //busca os registros para a lista    
         $resultado = mysqli_query($con,"SELECT * FROM descricao WHERE upper(descricao) like upper('%" .$_POST['busca'] . "%')");
          $linha = mysqli_fetch_assoc($resultado);
          
        if (strlen($texto) < 3) {
            echo "<h3> Você deve digitar no minimo 3 caracteres </h3>";
       
             $resultado = mysqli_query($con, "SELECT * from descricao where id_descricao = -1");
             $linha = mysqli_fetch_assoc($resultado);
        }

    }


    //muda a acao dependendo do retorno solicitado
    if ($_SESSION['modo'] == 'edicao') {
        $link_retorno = 'cadastro.php?acao=editar&id' . $_SESSION['idreceitadespesa'];
    } else {
        $link_retorno = 'cadastro.php?acao=cadastro';
    }




    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('linha', $linha);
    $smarty->assign('link_retorno', $link_retorno);
    var_dump($link_retorno);
    $smarty->assign('texto', $texto);
    $smarty->display('busca.tpl');
}

/* FIM FUNÇÕES */

/* DESENHA CADASTRO */


if (sizeof($_POST) == 0) {

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    $idDescricao = isset($_GET['idDescricao']) ? $_GET['idDescricao'] : null;

    if ($acao == null) {
        criaform();
        mostraGrid();
    }

    if ($acao == 'cadastro') {
        criaform($idDescricao);
        mostraGrid();
    }

    if ($acao == 'buscades') {
        criaFormBuscades();
    }
} else {

    // mostra o que foi recebido do post e 
    // faco uma acao dependendo do que foi requisitado
    //estou vindo do inserir ou do atualizar ou excluir?
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $acao_post = isset($_POST['acao_post']) ? $_POST['acao_post'] : null;
    
     //Post do buscar departamentos
    if ($acao_post == 'buscades') {
        criaFormBuscades($_POST['busca']);
    }
}


/* FIM DESENHA CADASTRO */
?>