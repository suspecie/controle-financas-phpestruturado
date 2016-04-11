{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<a  href="cadastro.php?acao=voltar"> HOME </a>

<hr>

<form action="cadastro.php" method="POST">
    
   <h4>CADASTRO DE RECEITAS E DESPESAS</h4>

    <label for="descricao">Descricao: </label>
     <input type="text" id="id_descricao" name="id_descricao" value="{$idDescricao}"  />
        | <a href="cadastro.php?acao=buscades">Buscar Descrições </a><br>         
    <br>
    <label for="tipo">Tipo: </label>    

    <select name="tipo" id="tipo" name="tipo">
        <option value="0"></option>

        {foreach from=$linha item=$tipo}
            <option value="{$tipo.id}">{$tipo.descricao}</option>
        {/foreach}
    </select>
    <br>
     <label for="mes">Mês: </label>
     <select name="mes" id="mes" name="mes">
         {html_options options=$mes}
    </select>
    <label for="ano">Ano: </label>
    <input type="text" name="ano" size="45"id="ano"  value="">
    <br>
    <label for="valor">Valor: </label>
    <input type="text" name="valor" size="45"id="valor"  value="">
    <br>
     <input type="submit" value="Salvar">

</form>



{include file ="./comum/base.tpl"}