{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.usuario}</p>

<hr>

<form action=" incluir.php" method="POST">

    <label for="descricao">Descricao: </label>
    <input type="text" name="descricao" size="45"id="descricao"  value="">
    <br>
    <label for="tipo">TIpo: </label>    

    <select name="tipo" id="tipo" name="tipo">
        <option value="0"></option>

        {foreach from=$linha item=$x}
            <option value="{$x.id}">{$x.descricao}</option>
        {/foreach}
    </select>


</form>



{include file ="./comum/base.tpl"}