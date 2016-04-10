{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.usuario}</p>
<a  href="cadastrodescricao.php?acao=voltar"> HOME </a>

<hr>

<form action="cadastrodescricao.php" method="POST">

    <h4>CADASTRO DE DESCRICAO</h4>
    <br>
    <label for="descricao">Descricao: </label>
    <input type="text" name="descricao" size="45"id="descricao"  value="">
    <br>
   <input type="submit" value="Salvar">


</form>



{include file ="./comum/base.tpl"}