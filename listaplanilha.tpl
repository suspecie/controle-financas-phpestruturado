{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<hr>

PERIODO DE: {$data_antes} ATÉ: {$data_depois}

<hr>
<table border="1">
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



{include file ="./comum/base.tpl"}