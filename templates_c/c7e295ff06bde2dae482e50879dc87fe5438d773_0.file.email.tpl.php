<?php
/* Smarty version 3.1.29, created on 2016-04-12 01:54:01
  from "C:\wamp64\www\controle-financas-phpestruturado\email.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_570c553925e3f7_44560596',
  'file_dependency' => 
  array (
    'c7e295ff06bde2dae482e50879dc87fe5438d773' => 
    array (
      0 => 'C:\\wamp64\\www\\controle-financas-phpestruturado\\email.tpl',
      1 => 1460426032,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./comum/topo.tpl' => 1,
    'file:./comum/base.tpl' => 1,
  ),
),false)) {
function content_570c553925e3f7_44560596 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/topo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2> CONTROLE DE GASTOS MENSAIS</h2>

<p> Usuário: <?php echo $_COOKIE['login'];?>
</p>
<a  href="cadastro.php?acao=voltar"> HOME </a>

<hr>

<form role="form" action="email.php" method="POST" name="myForm" id="myForm" enctype="multipart/form-data">
   
            <input type="hidden" name="data_antes" size="45"id="data_antes"  value="<?php echo $_smarty_tpl->tpl_vars['data_antes']->value;?>
">
            <input type="hidden" name="data_depois" size="45"id="data_depois"  value="<?php echo $_smarty_tpl->tpl_vars['data_depois']->value;?>
">
            <br>
            <label for="email">Seu e-mail: </label>
            <input type="text" name="email" size="30">
            <br>
            <input type="submit" id="enviar" name="enviar" value="ENVIAR">
     
</form>
            
 <h2 type="text" id="errorText" name="errorText"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['textError']->value)===null||$tmp==='' ? '' : $tmp);?>
 </h2>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:./comum/base.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
