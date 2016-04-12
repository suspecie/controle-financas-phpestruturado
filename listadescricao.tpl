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
          </div>
</div>

 {$paginador}


{include file ="./comum/base.tpl"}