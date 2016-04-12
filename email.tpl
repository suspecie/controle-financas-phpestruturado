{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: {$smarty.cookies.login}</p>

<hr>

<form role="form" action="email.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
   
            <input type="hidden" name="data_antes" size="45"id="data_antes"  value="{$data_antes}">
            <input type="hidden" name="data_depois" size="45"id="data_depois"  value="{$data_depois}">
            <br>
            <label for="email">Seu e-mail: </label>
            <input type="text" name="email" size="30">
            <br>
            <input type="submit" id="enviar" name="enviar" value="ENVIAR">
     
</form>
            
 <h2 type="text" id="errorText" name="errorText">{$textError|default:''} </h2>


{include file ="./comum/base.tpl"}