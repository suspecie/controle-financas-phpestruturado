{include file ="./comum/topo.tpl"}



<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>
<a  href="cadastrodescricao.php?acao=voltar"> HOME </a>

<hr>



<form id="contactForm" action="cadastrodescricao.php" method="POST">
    <h4>CADASTRO DE DESCRIÇÃO</h4><br>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group" >
                <input type="text"  class="form-control"  placeholder="Descrição" name="descricao" id="descricao"  value="">
                <p class="help-block text-danger"></p>
            </div>
        </div>
    </div>
    <input type="submit"  class="page-scroll btn btn-warning" value="Salvar">

</form>



{include file ="./comum/base.tpl"}