<?php

/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
include "valida_cookies.php";
$_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;

/* FUNÇÕES */

function index() {
    global $con;

    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->display('home.tpl');
}

/**
 * CRIA O FORM
 * @global type $con
 */
function criaform() {
    global $con;

    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->display('cadastrodescricao.tpl');
}

/**
 * MOSTRA O GRID
 * @global type $con
 */
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
    $query = "SELECT * FROM descricao LIMIT $inicio,$total_reg";
    $resultado = mysqli_query($con,$query);

    $i = 0;
    $descricoes = null;
    while ($linha = mysqli_fetch_object($resultado)) {

        $descricoes[$i] = $linha;
        $i = $i + 1;
    }


    //total de registros na tabela
    $query_total = "SELECT count(*) as total from descricao";
    $resultado_total = mysqli_query($con,$query_total);

    $linha_total = mysqli_fetch_object($resultado_total);
    $total_registros = $linha_total->total;


    //chama a paginacao
    $paginador = navegacao($pc, $total_registros);


    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('descricoes', $descricoes);
    $smarty->assign('paginador', $paginador);
    $smarty->display('listadescricao.tpl');
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
 * @param type $descricao
 */
function salvaRegistro($descricao) {
    global $con;

    //Validação Server Side
    $erro_mg = '';
    if (!isset($descricao) || $descricao == '') {
        $erro_mg .=' Descricao é um campo obrigatorio ' . PHP_EOL;
    };

    if (strlen($erro_mg) > 0) {
        die("<h1>Erro de Validação!</h1>" . $erro_mg . " Verifique!");
    }



    $query = "INSERT INTO descricao(descricao)" .
            " VALUES('" . $descricao . "')";

    mysqli_query($con, $query) or die(mysqli_error());
}

/**
 * 
 * @global type $con
 * @param type $idDepartamento
 */
function criaformEdicao($idDescricao) {
    //ir no banco e buscar o registro completamente    
    global $con;

    $qry_limitada = mysqli_query($con,'SELECT * from descricao WHERE id_descricao =' . $idDescricao);
    $linha = mysqli_fetch_assoc($qry_limitada);

    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('linha', $linha);
    $smarty->assign('idDescricao', $idDescricao);
    $smarty->display('atualizardescricao.tpl');
}

/**
 * 
 * @global type $con
 * @param type $dados
 */
function atualizaRegistro($dados) {

    GLOBAL $con;

    //recebendo os valores do array de entrada.
    $id = $dados['id'];
    $descricao = $dados['descricao'];

    //Validação Server Side
    $erro_mg = '';
    if (!isset($dados['descricao']) || $dados['descricao'] == '') {
        $erro_mg .=' Descricao é um campo obrigatorio ' . PHP_EOL;
    };

    if (strlen($erro_mg) > 0) {
        die("<h1>Erro de Validação!</h1>" . $erro_mg . " Verifique!");
    }


    $query = "UPDATE descricao set descricao=" .
            " '" . $descricao . "' where id_descricao='" . $id . "'";


    mysqli_query($con,$query) or die(mysqli_error());
}

/**
 * 
 * @param type $id
 */
function criaformExclusao($id) {

    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('id', $id);
    $smarty->display('excluirdescricao.tpl');
}

/**
 * 
 * @global type $con
 * @param type $id
 */
function removeRegistro($id) {
    global $con;
   
    $query = "delete from descricao where id_descricao='" . $id . "'";
     
    mysqli_query($con,$query) or die(mysqli_error());
}

/* FIM FUNÇÕES */

/* DESENHA CADASTRO */


if (sizeof($_POST) == 0) {

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : null;

    if ($acao == null) {

        //cria form de cadastro    
        criaform();
        //mostra a  lista
        mostraGrid();
    }

    //mostra form de edicao
    if ($acao == 'editar') {

        criaformEdicao($id);
    }

    //mostra form de exclusao
    if ($acao == 'excluir') {

        criaformExclusao($id);
    }

    //volta para a home
    if ($acao == 'voltar') {

        index();
    }
} else {

    // mostra o que foi recebido do post e apenas informo
    //estou vindo do inserir ou do atualizar?
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $acao_post = isset($_POST['acao_post']) ? $_POST['acao_post'] : null;

    //Criar
    if ($id == null) {
        salvaRegistro($_POST['descricao']);
        echo "Registro cadastrado com sucesso! ";
        echo "<br><a href='cadastrodescricao.php'> Voltar</a>";
    }

    //Atualizar
    if ($id != null && $acao_post == 'editar') {
        $pacoteenvio['id'] = $id;
        $pacoteenvio['descricao'] = $_POST['descricao'];
        atualizaRegistro($pacoteenvio);
        echo "Registro Atualizado com sucesso! ";
        echo "<br><a href='cadastrodescricao.php'> Voltar</a>";
    }

    // Excluir
    if ($id != null && $acao_post == 'excluir') {
        removeRegistro($id);
        echo "Registro Removido com sucesso! ";
        echo "<br><a href='cadastrodescricao.php'> Voltar</a>";
    }
}


/* FIM DESENHA CADASTRO */
?>