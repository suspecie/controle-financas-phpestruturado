{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<a  href="planilha.php?acao=voltar"> HOME </a>

<hr>

<form id="contactForm"  action="planilha.php" method="POST">

    <h4>ESCOLHA O PERIODO DE VISUALIZACAO</h4>
    <div class="row">
        <div class="col-md-6">
            <label for="mes_antes">Mês: </label>
            <select class="form-control" name="mes_antes" id="mes_antes" name="mes_antes">
                {html_options options=$mes}
            </select>
            <label for="ano_antes">Ano: </label>
            <input class="form-control"  type="text" name="ano_antes" size="45"id="ano_antes"  value="">
            <br>
            ATÉ
            <br>
            <label for="mes_depois">Mês: </label>
            <select  class="form-control"  name="mes_depois" id="mes_depois" name="mes_depois">
                {html_options options=$mes}
            </select>
            <label for="ano_depois">Ano: </label>
            <input  class="form-control" type="text" name="ano_depois" size="45"id="ano_depois"  value="">
            <BR>
        </div>
    </div>

    <input type="submit" class="page-scroll btn btn-warning" value="Visualizar">

</form>



{include file ="./comum/base.tpl"}