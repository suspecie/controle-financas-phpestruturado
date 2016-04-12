{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<a  href="cadastro.php?acao=voltar"> HOME </a>

<hr>

<form id="contactForm" action="cadastro.php" method="POST">

    <h4>CADASTRO DE RECEITAS E DESPESAS</h4>
    <div class="col-md-11">

        <input type="hidden" name="usuario" size="45"id="usuario"  value="{$smarty.cookies.login}">
        <label for="descricao">Descricao: </label>
        <input class="form-control" type="text" id="id_descricao" name="id_descricao" value="{$idDescricao}"  />
        | <a href="cadastro.php?acao=buscades">Buscar Descrições </a><br>         
        <br>
        <label for="tipo">Tipo: </label>    

        <select name="tipo" class="form-control" id="tipo" name="tipo">
            <option value="0"></option>

            {foreach from=$linha item=$tipo}
                <option value="{$tipo.id}">{$tipo.descricao}</option>
            {/foreach}
        </select>
        <br>
        <label for="mes">Mês: </label>
        <select name="mes" class="form-control" id="mes" name="mes">
            {html_options options=$mes}
        </select>
        <label for="ano">Ano: </label>
        <input type="text" class="form-control" name="ano" size="45"id="ano"  value="">
        <br>
        <label for="valor">Valor: </label>
        <input type="text" class="form-control" name="valor" size="45"id="valor"  value="">
        <br>
        <input type="submit" class="page-scroll btn btn-warning"value="Salvar">


    </div>



</form>



{include file ="./comum/base.tpl"}