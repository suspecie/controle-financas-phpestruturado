{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>

<hr>

<form action="cadastro.php?acao=buscades&acao2=post" method="POST">

    <h4>BUSCA DESCRICAO</h4>

    <input type="hidden" name="acao_post" id="acao_post" value="buscades" />
    <label for="descricao">Descricao: </label>
    <input type="text" name="busca" id="busca" value="{$texto}" /><br>
    <input type="submit" value="Buscar" name="btnbuscardes" /><br>
    <hr>
    Retorno:<br>


    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRICAO</th>
                <th>ACAO</th>
            </tr>
        </thead>
        <tbody>
        {if {$texto|count_characters lt 3}}            
            <td colspan='3'> NENHUM REGISTRO! </td>
        {elseif $linha == NULL}
            <td colspan='3'> NENHUM REGISTRO! </td>
        {else}
            <tr>
                <td> {$linha.id_descricao} </td>
                <td> {$linha.descricao} </td>
                <td>  <a href="{$link_retorno}&idDescricao={$linha.id_descricao}">Selecionar</a> 
                </td>      
            </tr>
        {/if}


        </tbody>
    </table>

</form>



{include file ="./comum/base.tpl"}