<?php

include("mpdf60/mpdf.php");
global $con;

$data_antes = isset($_GET['data_antes']) ? $_GET['data_antes'] : null;
$data_depois = isset($_GET['data_depois']) ? $_GET['data_depois'] : null;
$total_receitas = isset($_GET['total_receitas']) ? $_GET['total_receitas'] : null;
$total_despesas = isset($_GET['total_despesas']) ? $_GET['total_despesas'] : null;
$total_registros = isset($_GET['total_registros']) ? $_GET['total_registros'] : null;




$html = "
<h2> CONTROLE DE GASTOS MENSAIS</h2>
<hr>
PERIODO DE: {$data_antes} ATÉ: {$data_depois}

<hr>
<table>
    
    <thead>
        <tr>
            <th>TOTAL RECEITAS</th>
        </tr>
    </thead>
    <tbody>
        <td>R$ {$total_receitas} </td>
    </tbody>
    
     
    <thead>
        <tr>
            <th>TOTAL DESPESAS</th>
        </tr>
    </thead>
    <tbody>
        <td>R$ {$total_despesas} </td>
    </tbody>
    
     <thead>
        <tr>
            <th>TOTAL</th>
        </tr>
    </thead>
    <tbody>
        <td>R$ {$total_registros} </td>
    </tbody>
    
    
</table>

";

$mpdf = new mPDF();
$mpdf->SetDisplayMode('fullpage');
$mpdf->WriteHTML($html);
$mpdf->Output();

