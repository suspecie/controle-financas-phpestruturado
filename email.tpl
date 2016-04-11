{include file ="./comum/topo.tpl"}

<h2> CONTROLE DE GASTOS MENSAIS</h2>

<form role="form" action="email.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
    <div class="row">
        <div>
            <label for="email">Seu e-mail: </label>
            <input type="text" name="email" size="30">
        </div>
    </div>
    <br>
    <div class="row">
        <div>
            <input type="submit" id="enviar" name="enviar" value="ENVIAR">
        </div>
    </div>
</form>
            
 <h2 type="text" id="errorText" name="errorText">{$textError|default:''} </h2>


{include file ="./comum/base.tpl"}