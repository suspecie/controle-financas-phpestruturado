<?php
include "conexao.php";
global $con;

$data_antes = isset($_GET['data_antes']) ? $_GET['data_antes'] : null;
$data_depois = isset($_GET['data_depois']) ? $_GET['data_depois'] : null;

//busca os registros para a lista de total de receitas
$query_receitasfixastotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 1 AND (rd.data >= '" . $data_antes . "' AND rd.data <= '" . $data_depois . "')";

$resultado_receitasfixastotal = mysqli_query($con, $query_receitasfixastotal);
$linha_receitasfixastotal = mysqli_fetch_object($resultado_receitasfixastotal);
$total_receitasfixas = $linha_receitasfixastotal->total;


$query_receitasvariaveistotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 2 AND (rd.data >= '" . $data_antes . "' AND rd.data <= '" . $data_depois . "')";

$resultado_receitasvariaveistotal = mysqli_query($con, $query_receitasvariaveistotal);
$linha_receitasvariaveistotal = mysqli_fetch_object($resultado_receitasvariaveistotal);
$total_receitasvariaveis = $linha_receitasvariaveistotal->total;

$total_receitas = $total_receitasfixas + $total_receitasvariaveis;


//busca os registros para a lista de total de despesas
$query_despesasfixastotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 3 AND (rd.data >= '" . $data_antes . "' AND rd.data <= '" . $data_depois . "')";

$resultado_despesasfixastotal = mysqli_query($con, $query_despesasfixastotal);
$linha_despesasfixastotal = mysqli_fetch_object($resultado_despesasfixastotal);
$total_despesasfixas = $linha_despesasfixastotal->total;


$query_despesasvariaveistotal = "SELECT SUM(rd.valor) as total FROM receita_despesa rd    
        LEFT JOIN descricao des ON (des.id_descricao = rd.id_descricao)
        LEFT JOIN tipo_receita_despesa tipo ON (tipo.id = rd.id_tipo_receita_despesa)
        WHERE rd.id_tipo_receita_despesa = 4 AND (rd.data >= '" . $data_antes . "' AND rd.data <= '" . $data_depois . "')";

$resultado_despesasvariaveistotal = mysqli_query($con, $query_despesasvariaveistotal);
$linha_despesasvariaveistotal = mysqli_fetch_object($resultado_despesasvariaveistotal);
$total_despesasvariaveis = $linha_despesasvariaveistotal->total;

$total_despesas = $total_despesasfixas + $total_despesasvariaveis;


//total
$total_registros = $total_receitas + $total_despesas;
?>


<html>
    <head>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript">
            google.charts.load('current', {'packages': ['corechart']});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {

                var data = google.visualization.arrayToDataTable([
                    ['Total Receitas e Despesas', 'Período'],
                     
                    ['Saldo', '<?php echo $total_registros ?>'],
                    
                ]);

                var options = {
                    title: 'CONTROLE DE GASTOS MENSAIS'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                chart.draw(data, options);
            }
        </script>
    </head>
    <body>
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </body>
</html>