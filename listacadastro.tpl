{include file ="./comum/topo.tpl"}
<hr>

<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel panel-warning"></div>
    <div class="panel-body">



        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DESCRICAO</th>
                    <th>TIPO</th>
                    <th>DATA</th>
                    <th>VALOR</th>
                    <th>ACAO</th>
                </tr>
            </thead>
            <tbody>


                {foreach from=$receitasdespesas item=linha}
                    <tr>
                        <td> {$linha->id} </td>
                        <td> {$linha->descricao} </td>
                        <td> {$linha->tipo} </td>
                        <td> {$linha->data|date_format:"d/m/Y"} </td>
                        <td> R${$linha->valor|string_format:"%.2f"} </td>
                        <td> <a href='cadastro.php?acao=excluir&id={$linha->id}'>EXCLUIR</a>  </td> 
                    {foreachelse}
                        <td colspan='6'> NENHUM REGISTRO! </td>
                    </tr>

                {/foreach}

            </tbody>
        </table>
    </div>
</div>

{$paginador}


{include file ="./comum/base.tpl"}