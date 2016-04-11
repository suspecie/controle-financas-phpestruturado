{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<a  href="planilha.php?acao=voltar"> HOME </a>

<hr>

<form action="planilha.php" method="POST">
    
   <h4>ESCOLHA O PERIODO DE VISUALIZACAO</h4>

    
     <label for="mes_antes">Mês: </label>
    <select name="mes_antes" id="mes_antes" name="mes_antes">
         {html_options options=$mes}
    </select>
    <label for="ano_antes">Ano: </label>
    <input type="text" name="ano_antes" size="45"id="ano_antes"  value="">
    <br><br>
    ATÉ
    <br><br>
     <label for="mes_depois">Mês: </label>
     <select name="mes_depois" id="mes_depois" name="mes_depois">
         {html_options options=$mes}
    </select>
    <label for="ano_depois">Ano: </label>
    <input type="text" name="ano_depois" size="45"id="ano_depois"  value="">
    <BR>
     <input type="submit" value="Visualizar">

</form>



{include file ="./comum/base.tpl"}