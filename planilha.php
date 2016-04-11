<?php

/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
include "valida_cookies.php";
$_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;


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
    $smarty->display('periodo.tpl');
}

function mostraGrid($mes_antes = NULL,$mes_depois = NULL,$ano_antes = NULL,$ano_depois = NULL) {
    global $con;

    if(sizeof($mes_antes) < 10){
        $mes_antes = '0'.$mes_antes;
    }
    
     if(sizeof($mes_depois) < 10){
        $mes_depois = '0'.$mes_depois;
    }
    
    $data_antes = $ano_antes.'-'.$mes_antes.'-'.'01';
    $data_depois = $ano_depois.'-'.$mes_depois.'-'.'31';
    
   
    
   //busca os registros para a lista de receitas fixas   
    $query_receitasfixas = "SELECT rd.*, des.descricao AS descricao, tipo.descricao AS tipo FROM receita_despesa rd
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa) WHERE rd.id_tipo_receita_despesa = 1  AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."') ORDER BY ID ASC";
    $resultado_receitasfixas = mysqli_query($con, $query_receitasfixas);

    $i = 0;
    $receitasfixas = NULL;
    while ($linha_receitasfixas = mysqli_fetch_object($resultado_receitasfixas)) {
        $receitasfixas[$i] = $linha_receitasfixas;
        $i = $i + 1;
    }
    
    
    //busca os registros para a lista de receitas variaveis   
    $query_receitasvariaveis = "SELECT rd.*, des.descricao AS descricao, tipo.descricao AS tipo FROM receita_despesa rd
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa) WHERE rd.id_tipo_receita_despesa = 2 AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."') ORDER BY ID ASC";
    $resultado_receitasvariaveis = mysqli_query($con, $query_receitasvariaveis);

    $j = 0;
    $receitasvariaveis = NULL;
    while ($linha_receitasvariaveis = mysqli_fetch_object($resultado_receitasvariaveis)) {
        $receitasvariaveis[$i] = $linha_receitasvariaveis;
        $j = $j + 1;
    }
    
    //busca os registros para a lista de total de receitas
    $query_receitasfixastotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 1 AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."')";
    
    $resultado_receitasfixastotal = mysqli_query($con, $query_receitasfixastotal);
    $linha_receitasfixastotal = mysqli_fetch_object($resultado_receitasfixastotal);
    $total_receitasfixas = $linha_receitasfixastotal->total;
    
 
    $query_receitasvariaveistotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 2 AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."')";
    
    $resultado_receitasvariaveistotal = mysqli_query($con, $query_receitasvariaveistotal);
    $linha_receitasvariaveistotal = mysqli_fetch_object($resultado_receitasvariaveistotal);
    $total_receitasvariaveis = $linha_receitasvariaveistotal->total;
    
    $total_receitas = $total_receitasfixas + $total_receitasvariaveis;
     
    
    //busca os registros para a lista de despesas fixas  
    $query_despesasfixas = "SELECT rd.*, des.descricao AS descricao, tipo.descricao AS tipo FROM receita_despesa rd
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa) WHERE rd.id_tipo_receita_despesa = 3  AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."') ORDER BY ID ASC";
  
    $resultado_despesasfixas = mysqli_query($con, $query_despesasfixas);

    $m = 0;
    $despesasfixas = NULL;
    while ($linha_despesasfixas = mysqli_fetch_object($resultado_despesasfixas)) {
        $despesasfixas[$i] = $linha_despesasfixas;
        $m = $m + 1;
    }
    
    
    //busca os registros para a lista de despesas variaveis  
    $query_despesasvariaveis = "SELECT rd.*, des.descricao AS descricao, tipo.descricao AS tipo FROM receita_despesa rd
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa) WHERE rd.id_tipo_receita_despesa = 4  AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."') ORDER BY ID ASC";
    
    $resultado_despesasvariaveis = mysqli_query($con, $query_despesasvariaveis);

    $n = 0;
    $despesasvariaveis = NULL;
    while ($linha_despesasvariaveis = mysqli_fetch_object($resultado_despesasvariaveis)) {
        $despesasvariaveis[$i] = $linha_despesasvariaveis;
        $n = $n + 1;
    }
    

    //busca os registros para a lista de total de despesas
    $query_despesasfixastotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 3 AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."')";
    
    $resultado_despesasfixastotal = mysqli_query($con, $query_despesasfixastotal);
    $linha_despesasfixastotal = mysqli_fetch_object($resultado_despesasfixastotal);
    $total_despesasfixas = $linha_despesasfixastotal->total;
    
 
    $query_despesasvariaveistotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 4 AND (rd.data >= '" .$data_antes."' AND rd.data <= '" .$data_depois."')";
    
    $resultado_despesasvariaveistotal = mysqli_query($con, $query_despesasvariaveistotal);
    $linha_despesasvariaveistotal = mysqli_fetch_object($resultado_despesasvariaveistotal);
    $total_despesasvariaveis = $linha_despesasvariaveistotal->total;
    
    $total_despesas = $total_despesasfixas + $total_despesasvariaveis;
    

    //total
    $total_registros = $total_receitas + $total_despesas;


    /**
     * Careggando o smarty
     */
    $smarty = new Smarty();
    $smarty->assign('receitasfixas', $receitasfixas);
    $smarty->assign('receitasvariaveis', $receitasvariaveis);
    $smarty->assign('total_receitas', $total_receitas);    
    $smarty->assign('despesasfixas', $despesasfixas);
    $smarty->assign('despesasvariaveis', $despesasvariaveis);
    $smarty->assign('total_despesas', $total_despesas);
    $smarty->assign('total_registros', $total_registros);
    $smarty->assign('data_antes', $data_antes);
    $smarty->assign('data_depois', $data_depois);
   
    $smarty->display('listaplanilha.tpl');
}



/* DESENHA CADASTRO */


if (sizeof($_POST) == 0) {
    
    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;
    $id = isset($_GET['id']) ? $_GET['id'] : null;
    
    if ($acao == null) {

        //cria form de cadastro    
        criaform();
    }
    
    //volta para a home
    if ($acao == 'voltar') {

        index();
    }
    
}else{
    // mostra o que foi recebido do post e apenas informo
    //estou vindo do inserir ou do atualizar?
    $mes_antes = isset($_POST['mes_antes']) ? $_POST['mes_antes'] : null;
    $mes_depois = isset($_POST['mes_depois']) ? $_POST['mes_depois'] : null;
    $ano_antes = isset($_POST['ano_antes']) ? $_POST['ano_antes'] : null;
    $ano_depois = isset($_POST['ano_depois']) ? $_POST['ano_depois'] : null;
    
    mostraGrid($mes_antes,$mes_depois,$ano_antes,$ano_depois);
    
    
}

    

