<?php
/* CONEXAO BANCO DE DADOS */
include_once './vendor/smarty/smarty/libs/Smarty.class.php';
include "conexao.php";
include "valida_cookies.php";
$_SESSION['pagina'] = isset($_GET['pagina']) ? $_GET['pagina'] : null;

$data_antes = isset($_GET['data_antes']) ? $_GET['data_antes'] : null;
$data_depois = isset($_GET['data_depois']) ? $_GET['data_depois'] : null;
        
if (!isset($_POST["email"])) {
    $smarty = new Smarty();
    $smarty->assign('title', 'Planilha de Gastos Mensais');    
    $smarty->display('email.tpl');
} else {
    $email = $_POST["email"];
    if (strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0) {
        $smarty = new Smarty();
        $smarty->assign('title', 'Planilha de Gastos Mensais');
        $smarty->assign("textError", "O e-mail: {$email} é invalido!");
        $smarty->display('email.tpl');
    } else {
       
      
    
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
        
        $msg = NULL;
        $msg .= "\nTotal de receitas: R\$$total_receitas";
        $msg .= "\nTotal de despesas: R\$$total_despesas";
        $msg .= "\nSaldo: R\$$total_registros";
        $smarty = new Smarty();
        $smarty->assign('title', 'Planilha de Gastos Mensais');
        
        
        if (mail($email, "RECEITAS E DESPESAS", $msg, "From:sspecie13@gmail.com", "-r sspecie13@gmail.com")) {
            $smarty->assign("textError", "As despesas foram enviadas para o e-mail especificado.");
        } else {
            $smarty->assign("textError", "Erro ao enviar o email!");
        }
        $smarty->display('email.tpl');
    }
}
?>
