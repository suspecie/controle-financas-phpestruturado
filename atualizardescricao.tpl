{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.usuario}</p>

<hr>

<form action="cadastrodescricao.php?" method="POST">

    <h4>ALTERAR  DESCRICAO</h4>
    <br>
    <input type="hidden" name="acao_post" id="acao_post" value="editar" />
    <input type="hidden" name="id" size="45"id="id"  value="{$idDescricao}">
    <br>
    <label for="descricao">Descricao: </label>
    <input type="text" name="descricao" size="45"id="descricao"  value="{$linha['descricao']}">
    <br>
    <input type="submit" value="Atualizar">


</form>



{include file ="./comum/base.tpl"}