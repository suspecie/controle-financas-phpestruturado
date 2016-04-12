{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>

<hr>

<form id="contactForm" action="cadastrodescricao.php?" method="POST">
    <h4>ATUALIZAR DESCRIÇÃO</h4><br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group" >
                <input type="hidden" name="acao_post" id="acao_post" value="editar" />
                <input type="hidden" name="id" size="45"id="id"  value="{$idDescricao}">
            </div>
            <div class="form-group" >
                <input type="text"  class="form-control"  placeholder="Descrição" name="descricao" id="descricao" value="{$linha['descricao']}">
                <p class="help-block text-danger"></p>
            </div>
        </div>
    </div>
    <input type="submit"  class="page-scroll btn btn-warning" value="Atualizar">

</form>



{include file ="./comum/base.tpl"}