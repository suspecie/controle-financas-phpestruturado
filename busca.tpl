{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>

<hr>

<form id="contactForm"  action="cadastro.php?acao=buscades&acao2=post" method="POST">

    <h4>BUSCA DESCRICAO</h4>
    <div class="row">
        <div class="col-md-6">
            <input type="hidden" name="acao_post" id="acao_post" value="buscades" />
            <label for="descricao">Descricao: </label>
            <input type="text" class="form-control" name="busca" id="busca" value="{$texto}" /><br>
            <input type="submit" value="Buscar" class="page-scroll btn btn-warning" name="btnbuscardes" /><br>
        </div>

    </div>

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
        </div>
    </div>
</form>



{include file ="./comum/base.tpl"}