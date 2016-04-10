{include file ="./comum/topo.tpl"}
<hr>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>DESCRICAO</th>
            <th>ACAO</th>
        </tr>
    </thead>
    <tbody>


        {foreach from=$descricoes item=linha}
            <tr>
                <td> {$linha->id_descricao} </td>
                <td>   {$linha->descricao} </td>
                <td> <a href='cadastrodescricao.php?acao=editar&id={$linha->id_descricao}'>ALTERAR</a> | 
                    <a href='cadastrodescricao.php?acao=excluir&id={$linha->id_descricao}'>EXCLUIR</a>  </td> 
                {foreachelse}
                <td colspan='3'> NENHUM REGISTRO! </td>
            </tr>

        {/foreach}

    </tbody>
</table>

 {$paginador}


{include file ="./comum/base.tpl"}