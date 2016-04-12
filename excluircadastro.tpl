{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>

<hr>


<form id="contactForm" action="cadastro.php?" method="POST">

    <br>
    <input type="hidden" name="acao_post" id="acao_post" value="excluir" />
       <input type="hidden" name="id" id="id" value="{$id}" />     
    Tem certeza que deseja excluir o registro {$id} ?

    <input type="submit" value="SIM" class="page-scroll btn btn-warning" name="btnsim" />
    <input type="reset" value="NAO"  class="page-scroll btn btn-warning" name="btnnao" onclick="window.history.back();"/>

</form>





{include file ="./comum/base.tpl"}