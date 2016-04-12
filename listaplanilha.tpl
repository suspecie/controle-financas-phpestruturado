{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<hr>


<a href="email.php?data_antes={$data_antes}&data_depois={$data_depois}">EMAIL</a> |
<a href="grafico.php?data_antes={$data_antes}&data_depois={$data_depois}" target="_blank">GRÁFICO</a> |
<a href="pdf.php?data_antes={$data_antes}&data_depois={$data_depois}&total_receitas={$total_receitas}&total_despesas={$total_despesas}&total_registros={$total_registros}" target="_blank">PDF</a>
<form role="form" action="email.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">

    <hr>
    PERIODO DE: {$data_antes} ATÉ: {$data_depois}

    <hr>
    <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel panel-warning"></div>
        <div class="panel-body">



            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3">RECEITAS FIXAS</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$receitasfixas item=linhareceitasfixas}
                        <tr>
                            <td> {$linhareceitasfixas->descricao} </td>
                            <td>R$ {$linhareceitasfixas->valor} </td>
                            <td>   {$linhareceitasfixas->data|date_format:"d/m/Y"} </td>
                        {foreachelse}
                            <td colspan='3'> NENHUM REGISTRO! </td>
                        </tr>

                    {/foreach}

                </tbody>

                <thead>
                    <tr>
                        <th colspan="3">RECEITAS VARIAVEIS</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$receitasvariaveis item=linhareceitasvariaveis}
                        <tr>
                            <td> {$linhareceitasvariaveis->descricao} </td>
                            <td>R$ {$linhareceitasvariaveis->valor|string_format:"%.2f"} </td>
                            <td>   {$linhareceitasvariaveis->data|date_format:"d/m/Y"} </td>
                        {foreachelse}
                            <td colspan='3'> NENHUM REGISTRO! </td>
                        </tr>

                    {/foreach}

                </tbody>

                <thead>
                    <tr>
                        <th colspan="3">TOTAL RECEITAS</th>
                    </tr>
                </thead>
                <tbody>
                <td colspan='3'>R$ {$total_receitas|string_format:"%.2f"} </td>
                </tbody>

                <thead>
                    <tr>
                        <th colspan="3">DESPESAS FIXAS</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$despesasfixas item=linhadespesasfixas}
                        <tr>
                            <td> {$linhadespesasfixas->descricao} </td>
                            <td>R$ {$linhadespesasfixas->valor} </td>
                            <td>   {$linhadespesasfixas->data|date_format:"d/m/Y"} </td>
                        {foreachelse}
                            <td colspan='3'> NENHUM REGISTRO! </td>
                        </tr>

                    {/foreach}

                </tbody>

                <thead>
                    <tr>
                        <th colspan="3">DESPESAS VARIAVEIS</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach from=$despesasvariaveis item=linhadespesasvariaveis}
                        <tr>
                            <td> {$linhadespesasvariaveis->descricao} </td>
                            <td>R$ {$linhadespesasvariaveis->valor|string_format:"%.2f"} </td>
                            <td>   {$linhadespesasvariaveis->data|date_format:"d/m/Y"} </td>
                        {foreachelse}
                            <td colspan='3'> NENHUM REGISTRO! </td>
                        </tr>

                    {/foreach}

                </tbody>


                <thead>
                    <tr>
                        <th colspan="3">TOTAL DESPESAS</th>
                    </tr>
                </thead>
                <tbody>
                <td colspan='3'>R$ {$total_despesas|string_format:"%.2f"} </td>
                </tbody>

                <thead>
                    <tr>
                        <th colspan="3">TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                <td colspan='3'>R$ {$total_registros|string_format:"%.2f"} </td>
                </tbody>
            </table>
        </div>
    </div>

</form>

{include file ="./comum/base.tpl"}